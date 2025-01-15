<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\NotifyProvisionProductEngineWorkflowResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowToken
 * @property string $RecordId
 * @property 'SUCCEEDED'|'FAILED' $Status
 * @property string|null $FailureReason
 * @property Shapes\EngineWorkflowResourceIdentifier|null $ResourceIdentifier
 * @property list<Shapes\RecordOutput>|null $Outputs
 * @property string $IdempotencyToken
 */
class NotifyProvisionProductEngineWorkflowResultRequest extends Request
{
    /**
     * @param array{
     *     WorkflowToken: string,
     *     RecordId: string,
     *     Status: 'SUCCEEDED'|'FAILED',
     *     FailureReason?: string|null,
     *     ResourceIdentifier?: Shapes\EngineWorkflowResourceIdentifier|null,
     *     Outputs?: list<Shapes\RecordOutput>|null,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
