<?php

namespace Sunaoka\Aws\Structures\CloudFormation\TestType;

trait TestTypeTrait
{
    /**
     * @param TestTypeRequest $args
     * @return TestTypeResponse
     */
    public function testType(TestTypeRequest $args)
    {
        $result = parent::testType($args->toArray());
        return new TestTypeResponse($result->toArray());
    }
}
