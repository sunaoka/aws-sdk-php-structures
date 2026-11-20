<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecordStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $recordId
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'CREATE_PENDING_AUTH'|'UPDATE_PENDING_AUTH' $status
 * @property string $statusReason
 */
class UpdateRegistryRecordStatusRequest extends Request
{
    /**
     * @param array{
     *     registryId: string,
     *     recordId: string,
     *     status: 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'CREATE_PENDING_AUTH'|'UPDATE_PENDING_AUTH',
     *     statusReason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
