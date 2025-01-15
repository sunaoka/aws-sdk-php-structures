<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\NotifyUpdateProvisionedProductEngineWorkflowResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowToken
 * @property string $RecordId
 * @property 'SUCCEEDED'|'FAILED' $Status
 * @property string|null $FailureReason
 * @property list<Shapes\RecordOutput>|null $Outputs
 * @property string $IdempotencyToken
 */
class NotifyUpdateProvisionedProductEngineWorkflowResultRequest extends Request
{
    /**
     * @param array{
     *     WorkflowToken: string,
     *     RecordId: string,
     *     Status: 'SUCCEEDED'|'FAILED',
     *     FailureReason?: string|null,
     *     Outputs?: list<Shapes\RecordOutput>|null,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
