<?php

namespace Sunaoka\Aws\Structures\B2bi\TestParsing;

trait TestParsingTrait
{
    /**
     * @param TestParsingRequest $args
     * @return TestParsingResponse
     */
    public function testParsing(TestParsingRequest $args)
    {
        $result = parent::testParsing($args->toArray());
        return new TestParsingResponse($result->toArray());
    }
}
