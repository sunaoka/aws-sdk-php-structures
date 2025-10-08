<?php

namespace Sunaoka\Aws\Structures\Macie2\TestCustomDataIdentifier;

trait TestCustomDataIdentifierTrait
{
    /**
     * @param TestCustomDataIdentifierRequest $args
     * @return TestCustomDataIdentifierResponse
     */
    public function testCustomDataIdentifier(TestCustomDataIdentifierRequest $args)
    {
        $result = parent::testCustomDataIdentifier($args->toArray());
        return new TestCustomDataIdentifierResponse($result->toArray());
    }
}
