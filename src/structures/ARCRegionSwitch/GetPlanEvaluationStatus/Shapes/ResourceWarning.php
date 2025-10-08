<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanEvaluationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MinimalWorkflow|null $workflow
 * @property string $version
 * @property string|null $stepName
 * @property string|null $resourceArn
 * @property 'active'|'resolved' $warningStatus
 * @property \Aws\Api\DateTimeResult $warningUpdatedTime
 * @property string $warningMessage
 */
class ResourceWarning extends Shape
{
    /**
     * @param array{
     *     workflow?: MinimalWorkflow|null,
     *     version: string,
     *     stepName?: string|null,
     *     resourceArn?: string|null,
     *     warningStatus: 'active'|'resolved',
     *     warningUpdatedTime: \Aws\Api\DateTimeResult,
     *     warningMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
