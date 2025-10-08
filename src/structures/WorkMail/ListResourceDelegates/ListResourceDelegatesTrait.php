<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListResourceDelegates;

trait ListResourceDelegatesTrait
{
    /**
     * @param ListResourceDelegatesRequest $args
     * @return ListResourceDelegatesResponse
     */
    public function listResourceDelegates(ListResourceDelegatesRequest $args)
    {
        $result = parent::listResourceDelegates($args->toArray());
        return new ListResourceDelegatesResponse($result->toArray());
    }
}
