<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestSuite;

trait CreateTestSuiteTrait
{
    /**
     * @param CreateTestSuiteRequest $args
     * @return CreateTestSuiteResponse
     */
    public function createTestSuite(CreateTestSuiteRequest $args)
    {
        $result = parent::createTestSuite($args->toArray());
        return new CreateTestSuiteResponse($result->toArray());
    }
}
