<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\NotifyTerminateProvisionedProductEngineWorkflowResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowToken
 * @property string $RecordId
 * @property 'SUCCEEDED'|'FAILED' $Status
 * @property string|null $FailureReason
 * @property string $IdempotencyToken
 */
class NotifyTerminateProvisionedProductEngineWorkflowResultRequest extends Request
{
    /**
     * @param array{
     *     WorkflowToken: string,
     *     RecordId: string,
     *     Status: 'SUCCEEDED'|'FAILED',
     *     FailureReason?: string|null,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
