<?php

namespace Sunaoka\Aws\Structures\B2bi\TestConversion;

trait TestConversionTrait
{
    /**
     * @param TestConversionRequest $args
     * @return TestConversionResponse
     */
    public function testConversion(TestConversionRequest $args)
    {
        $result = parent::testConversion($args->toArray());
        return new TestConversionResponse($result->toArray());
    }
}
