<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateInferenceScheduler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceSchedulerName
 * @property int<0, 60>|null $DataDelayOffsetInMinutes
 * @property 'PT5M'|'PT10M'|'PT15M'|'PT30M'|'PT1H'|null $DataUploadFrequency
 * @property Shapes\InferenceInputConfiguration|null $DataInputConfiguration
 * @property Shapes\InferenceOutputConfiguration|null $DataOutputConfiguration
 * @property string|null $RoleArn
 */
class UpdateInferenceSchedulerRequest extends Request
{
    /**
     * @param array{
     *     InferenceSchedulerName: string,
     *     DataDelayOffsetInMinutes?: int<0, 60>|null,
     *     DataUploadFrequency?: 'PT5M'|'PT10M'|'PT15M'|'PT30M'|'PT1H'|null,
     *     DataInputConfiguration?: Shapes\InferenceInputConfiguration|null,
     *     DataOutputConfiguration?: Shapes\InferenceOutputConfiguration|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
