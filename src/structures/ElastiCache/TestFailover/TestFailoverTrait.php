<?php

namespace Sunaoka\Aws\Structures\ElastiCache\TestFailover;

trait TestFailoverTrait
{
    /**
     * @param TestFailoverRequest $args
     * @return TestFailoverResponse
     */
    public function testFailover(TestFailoverRequest $args)
    {
        $result = parent::testFailover($args->toArray());
        return new TestFailoverResponse($result->toArray());
    }
}
