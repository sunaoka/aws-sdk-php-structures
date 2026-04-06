<?php

namespace Sunaoka\Aws\Structures\QConnect\GetContentAssociation;

trait GetContentAssociationTrait
{
    /**
     * @param GetContentAssociationRequest $args
     * @return GetContentAssociationResponse
     */
    public function getContentAssociation(GetContentAssociationRequest $args)
    {
        $result = parent::getContentAssociation($args->toArray());
        return new GetContentAssociationResponse($result->toArray());
    }
}
