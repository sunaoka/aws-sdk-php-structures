<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite;

trait GetTestSuiteTrait
{
    /**
     * @param GetTestSuiteRequest $args
     * @return GetTestSuiteResponse
     */
    public function getTestSuite(GetTestSuiteRequest $args)
    {
        $result = parent::getTestSuite($args->toArray());
        return new GetTestSuiteResponse($result->toArray());
    }
}
