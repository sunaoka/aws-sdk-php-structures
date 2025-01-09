<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\ListModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property string $ModelVersion
 * @property string $ModelArn
 * @property string $Description
 * @property 'TRAINING'|'TRAINED'|'TRAINING_FAILED'|'STARTING_HOSTING'|'HOSTED'|'HOSTING_FAILED'|'STOPPING_HOSTING'|'SYSTEM_UPDATING'|'DELETING' $Status
 * @property string $StatusMessage
 * @property ModelPerformance $Performance
 */
class ModelMetadata extends Shape
{
    /**
     * @param array{
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     ModelVersion?: string,
     *     ModelArn?: string,
     *     Description?: string,
     *     Status?: 'TRAINING'|'TRAINED'|'TRAINING_FAILED'|'STARTING_HOSTING'|'HOSTED'|'HOSTING_FAILED'|'STOPPING_HOSTING'|'SYSTEM_UPDATING'|'DELETING',
     *     StatusMessage?: string,
     *     Performance?: ModelPerformance
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
