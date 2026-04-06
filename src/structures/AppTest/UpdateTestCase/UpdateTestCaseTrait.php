<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestCase;

trait UpdateTestCaseTrait
{
    /**
     * @param UpdateTestCaseRequest $args
     * @return UpdateTestCaseResponse
     */
    public function updateTestCase(UpdateTestCaseRequest $args)
    {
        $result = parent::updateTestCase($args->toArray());
        return new UpdateTestCaseResponse($result->toArray());
    }
}
