<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListSuites;

trait ListSuitesTrait
{
    /**
     * @param ListSuitesRequest $args
     * @return ListSuitesResponse
     */
    public function listSuites(ListSuitesRequest $args)
    {
        $result = parent::listSuites($args->toArray());
        return new ListSuitesResponse($result->toArray());
    }
}
