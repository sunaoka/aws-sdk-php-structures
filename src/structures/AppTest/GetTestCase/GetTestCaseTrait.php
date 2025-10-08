<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestCase;

trait GetTestCaseTrait
{
    /**
     * @param GetTestCaseRequest $args
     * @return GetTestCaseResponse
     */
    public function getTestCase(GetTestCaseRequest $args)
    {
        $result = parent::getTestCase($args->toArray());
        return new GetTestCaseResponse($result->toArray());
    }
}
