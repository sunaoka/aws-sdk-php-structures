<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeTopicsDetectionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property string $JobArn
 * @property string $JobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED' $JobStatus
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $SubmitTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property InputDataConfig $InputDataConfig
 * @property OutputDataConfig $OutputDataConfig
 * @property int $NumberOfTopics
 * @property string $DataAccessRoleArn
 * @property string $VolumeKmsKeyId
 * @property VpcConfig $VpcConfig
 */
class TopicsDetectionJobProperties extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     JobArn?: string,
     *     JobName?: string,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED',
     *     Message?: string,
     *     SubmitTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     InputDataConfig?: InputDataConfig,
     *     OutputDataConfig?: OutputDataConfig,
     *     NumberOfTopics?: int,
     *     DataAccessRoleArn?: string,
     *     VolumeKmsKeyId?: string,
     *     VpcConfig?: VpcConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
