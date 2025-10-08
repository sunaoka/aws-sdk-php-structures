<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListListeners;

trait ListListenersTrait
{
    /**
     * @param ListListenersRequest $args
     * @return ListListenersResponse
     */
    public function listListeners(ListListenersRequest $args)
    {
        $result = parent::listListeners($args->toArray());
        return new ListListenersResponse($result->toArray());
    }
}
