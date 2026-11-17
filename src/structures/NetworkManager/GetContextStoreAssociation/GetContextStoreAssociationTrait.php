<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetContextStoreAssociation;

trait GetContextStoreAssociationTrait
{
    /**
     * @param GetContextStoreAssociationRequest $args
     * @return GetContextStoreAssociationResponse
     */
    public function getContextStoreAssociation(GetContextStoreAssociationRequest $args)
    {
        $result = parent::getContextStoreAssociation($args->toArray());
        return new GetContextStoreAssociationResponse($result->toArray());
    }
}
