<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\NotifyUpdateProvisionedProductEngineWorkflowResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowToken
 * @property string $RecordId
 * @property 'SUCCEEDED'|'FAILED' $Status
 * @property string $FailureReason
 * @property list<Shapes\RecordOutput> $Outputs
 * @property string $IdempotencyToken
 */
class NotifyUpdateProvisionedProductEngineWorkflowResultRequest extends Request
{
    /**
     * @param array{
     *     WorkflowToken: string,
     *     RecordId: string,
     *     Status: 'SUCCEEDED'|'FAILED',
     *     FailureReason?: string,
     *     Outputs?: list<Shapes\RecordOutput>,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
