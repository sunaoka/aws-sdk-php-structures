<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateCustomDataIdentifier;

trait CreateCustomDataIdentifierTrait
{
    /**
     * @param CreateCustomDataIdentifierRequest $args
     * @return CreateCustomDataIdentifierResponse
     */
    public function createCustomDataIdentifier(CreateCustomDataIdentifierRequest $args)
    {
        $result = parent::createCustomDataIdentifier($args->toArray());
        return new CreateCustomDataIdentifierResponse($result->toArray());
    }
}
