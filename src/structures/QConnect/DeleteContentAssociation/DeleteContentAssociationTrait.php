<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteContentAssociation;

trait DeleteContentAssociationTrait
{
    /**
     * @param DeleteContentAssociationRequest $args
     * @return DeleteContentAssociationResponse
     */
    public function deleteContentAssociation(DeleteContentAssociationRequest $args)
    {
        $result = parent::deleteContentAssociation($args->toArray());
        return new DeleteContentAssociationResponse($result->toArray());
    }
}
