<?php
/**
 * @license MIT
 * Full license text in LICENSE file
 */

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404
{
    public function get_response()
    {
        $view = new View_Error_404;
        $renderer = Kostache_Layout::factory('404');
        $response = Response::factory()->status(404);
        $response->body($renderer->render($view));

        return $response;
    }
}
