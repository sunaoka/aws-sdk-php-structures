<?php

namespace Sunaoka\Aws\Structures\Connect\CreateTestCase;

trait CreateTestCaseTrait
{
    /**
     * @param CreateTestCaseRequest $args
     * @return CreateTestCaseResponse
     */
    public function createTestCase(CreateTestCaseRequest $args)
    {
        $result = parent::createTestCase($args->toArray());
        return new CreateTestCaseResponse($result->toArray());
    }
}
