<?php

namespace Sunaoka\Aws\Structures\Macie2\DeleteCustomDataIdentifier;

trait DeleteCustomDataIdentifierTrait
{
    /**
     * @param DeleteCustomDataIdentifierRequest $args
     * @return DeleteCustomDataIdentifierResponse
     */
    public function deleteCustomDataIdentifier(DeleteCustomDataIdentifierRequest $args)
    {
        $result = parent::deleteCustomDataIdentifier($args->toArray());
        return new DeleteCustomDataIdentifierResponse($result->toArray());
    }
}
