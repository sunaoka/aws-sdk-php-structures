<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceIamInstanceProfileAssociation;

trait ReplaceIamInstanceProfileAssociationTrait
{
    /**
     * @param ReplaceIamInstanceProfileAssociationRequest $args
     * @return ReplaceIamInstanceProfileAssociationResponse
     */
    public function replaceIamInstanceProfileAssociation(ReplaceIamInstanceProfileAssociationRequest $args)
    {
        $result = parent::replaceIamInstanceProfileAssociation($args->toArray());
        return new ReplaceIamInstanceProfileAssociationResponse($result->toArray());
    }
}
