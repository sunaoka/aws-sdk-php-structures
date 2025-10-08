<?php

namespace Sunaoka\Aws\Structures\Route53\TestDNSAnswer;

trait TestDNSAnswerTrait
{
    /**
     * @param TestDNSAnswerRequest $args
     * @return TestDNSAnswerResponse
     */
    public function testDNSAnswer(TestDNSAnswerRequest $args)
    {
        $result = parent::testDNSAnswer($args->toArray());
        return new TestDNSAnswerResponse($result->toArray());
    }
}
