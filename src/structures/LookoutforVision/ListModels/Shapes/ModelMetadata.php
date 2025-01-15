<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\ListModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property string|null $ModelVersion
 * @property string|null $ModelArn
 * @property string|null $Description
 * @property 'TRAINING'|'TRAINED'|'TRAINING_FAILED'|'STARTING_HOSTING'|'HOSTED'|'HOSTING_FAILED'|'STOPPING_HOSTING'|'SYSTEM_UPDATING'|'DELETING'|null $Status
 * @property string|null $StatusMessage
 * @property ModelPerformance|null $Performance
 */
class ModelMetadata extends Shape
{
    /**
     * @param array{
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ModelVersion?: string|null,
     *     ModelArn?: string|null,
     *     Description?: string|null,
     *     Status?: 'TRAINING'|'TRAINED'|'TRAINING_FAILED'|'STARTING_HOSTING'|'HOSTED'|'HOSTING_FAILED'|'STOPPING_HOSTING'|'SYSTEM_UPDATING'|'DELETING'|null,
     *     StatusMessage?: string|null,
     *     Performance?: ModelPerformance|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
