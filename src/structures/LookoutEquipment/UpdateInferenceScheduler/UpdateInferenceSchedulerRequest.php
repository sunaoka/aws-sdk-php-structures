<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateInferenceScheduler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceSchedulerName
 * @property int $DataDelayOffsetInMinutes
 * @property 'PT5M'|'PT10M'|'PT15M'|'PT30M'|'PT1H' $DataUploadFrequency
 * @property Shapes\InferenceInputConfiguration $DataInputConfiguration
 * @property Shapes\InferenceOutputConfiguration $DataOutputConfiguration
 * @property string $RoleArn
 */
class UpdateInferenceSchedulerRequest extends Request
{
    /**
     * @param array{
     *     InferenceSchedulerName: string,
     *     DataDelayOffsetInMinutes?: int,
     *     DataUploadFrequency?: 'PT5M'|'PT10M'|'PT15M'|'PT30M'|'PT1H',
     *     DataInputConfiguration?: Shapes\InferenceInputConfiguration,
     *     DataOutputConfiguration?: Shapes\InferenceOutputConfiguration,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
