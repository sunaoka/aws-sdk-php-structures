<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestSuites;

trait ListTestSuitesTrait
{
    /**
     * @param ListTestSuitesRequest $args
     * @return ListTestSuitesResponse
     */
    public function listTestSuites(ListTestSuitesRequest $args)
    {
        $result = parent::listTestSuites($args->toArray());
        return new ListTestSuitesResponse($result->toArray());
    }
}
