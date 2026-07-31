<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetTest;

trait GetTestTrait
{
    /**
     * @param GetTestRequest $args
     * @return GetTestResponse
     */
    public function getTest(GetTestRequest $args)
    {
        $result = parent::getTest($args->toArray());
        return new GetTestResponse($result->toArray());
    }
}
