<?php

namespace Sunaoka\Aws\Structures\B2bi\TestMapping;

trait TestMappingTrait
{
    /**
     * @param TestMappingRequest $args
     * @return TestMappingResponse
     */
    public function testMapping(TestMappingRequest $args)
    {
        $result = parent::testMapping($args->toArray());
        return new TestMappingResponse($result->toArray());
    }
}
