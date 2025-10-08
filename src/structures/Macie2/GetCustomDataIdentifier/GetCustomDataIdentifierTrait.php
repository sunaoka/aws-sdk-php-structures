<?php

namespace Sunaoka\Aws\Structures\Macie2\GetCustomDataIdentifier;

trait GetCustomDataIdentifierTrait
{
    /**
     * @param GetCustomDataIdentifierRequest $args
     * @return GetCustomDataIdentifierResponse
     */
    public function getCustomDataIdentifier(GetCustomDataIdentifierRequest $args)
    {
        $result = parent::getCustomDataIdentifier($args->toArray());
        return new GetCustomDataIdentifierResponse($result->toArray());
    }
}
