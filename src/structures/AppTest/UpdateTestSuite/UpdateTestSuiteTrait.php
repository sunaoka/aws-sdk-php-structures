<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestSuite;

trait UpdateTestSuiteTrait
{
    /**
     * @param UpdateTestSuiteRequest $args
     * @return UpdateTestSuiteResponse
     */
    public function updateTestSuite(UpdateTestSuiteRequest $args)
    {
        $result = parent::updateTestSuite($args->toArray());
        return new UpdateTestSuiteResponse($result->toArray());
    }
}
