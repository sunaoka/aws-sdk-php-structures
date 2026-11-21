<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdatePublisherAssociationApprovalStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recordArn
 * @property 'APPROVED'|'REJECTED' $approvalStatus
 * @property string $approvalStatusReason
 */
class UpdatePublisherAssociationApprovalStatusRequest extends Request
{
    /**
     * @param array{
     *     recordArn: string,
     *     approvalStatus: 'APPROVED'|'REJECTED',
     *     approvalStatusReason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
