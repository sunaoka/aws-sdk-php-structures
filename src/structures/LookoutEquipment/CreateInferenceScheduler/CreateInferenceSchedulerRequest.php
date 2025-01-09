<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateInferenceScheduler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property string $InferenceSchedulerName
 * @property int $DataDelayOffsetInMinutes
 * @property 'PT5M'|'PT10M'|'PT15M'|'PT30M'|'PT1H' $DataUploadFrequency
 * @property Shapes\InferenceInputConfiguration $DataInputConfiguration
 * @property Shapes\InferenceOutputConfiguration $DataOutputConfiguration
 * @property string $RoleArn
 * @property string $ServerSideKmsKeyId
 * @property string $ClientToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateInferenceSchedulerRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     InferenceSchedulerName: string,
     *     DataDelayOffsetInMinutes?: int,
     *     DataUploadFrequency: 'PT5M'|'PT10M'|'PT15M'|'PT30M'|'PT1H',
     *     DataInputConfiguration: Shapes\InferenceInputConfiguration,
     *     DataOutputConfiguration: Shapes\InferenceOutputConfiguration,
     *     RoleArn: string,
     *     ServerSideKmsKeyId?: string,
     *     ClientToken: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
