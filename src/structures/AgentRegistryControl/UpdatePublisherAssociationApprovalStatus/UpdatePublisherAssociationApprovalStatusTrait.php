<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdatePublisherAssociationApprovalStatus;

trait UpdatePublisherAssociationApprovalStatusTrait
{
    /**
     * @param UpdatePublisherAssociationApprovalStatusRequest $args
     * @return UpdatePublisherAssociationApprovalStatusResponse
     */
    public function updatePublisherAssociationApprovalStatus(UpdatePublisherAssociationApprovalStatusRequest $args)
    {
        $result = parent::updatePublisherAssociationApprovalStatus($args->toArray());
        return new UpdatePublisherAssociationApprovalStatusResponse($result->toArray());
    }
}
