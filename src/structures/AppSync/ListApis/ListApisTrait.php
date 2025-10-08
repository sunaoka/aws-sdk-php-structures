<?php

namespace Sunaoka\Aws\Structures\AppSync\ListApis;

trait ListApisTrait
{
    /**
     * @param ListApisRequest $args
     * @return ListApisResponse
     */
    public function listApis(ListApisRequest $args)
    {
        $result = parent::listApis($args->toArray());
        return new ListApisResponse($result->toArray());
    }
}
