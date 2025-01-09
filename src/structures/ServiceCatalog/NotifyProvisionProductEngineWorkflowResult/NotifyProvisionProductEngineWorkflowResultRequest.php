<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\NotifyProvisionProductEngineWorkflowResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowToken
 * @property string $RecordId
 * @property 'SUCCEEDED'|'FAILED' $Status
 * @property string $FailureReason
 * @property Shapes\EngineWorkflowResourceIdentifier $ResourceIdentifier
 * @property list<Shapes\RecordOutput> $Outputs
 * @property string $IdempotencyToken
 */
class NotifyProvisionProductEngineWorkflowResultRequest extends Request
{
    /**
     * @param array{
     *     WorkflowToken: string,
     *     RecordId: string,
     *     Status: 'SUCCEEDED'|'FAILED',
     *     FailureReason?: string,
     *     ResourceIdentifier?: Shapes\EngineWorkflowResourceIdentifier,
     *     Outputs?: list<Shapes\RecordOutput>,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
