<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrainingSessionArn
 * @property string $TrainingSessionName
 * @property 'Created'|'Blocked'|'Running'|'Failed'|'Scheduled'|'Stopping'|'Stopped'|'Expired'|'Deleting'|'DeletionFailed' $TrainingSessionStatus
 * @property string|null $ModelPackageGroupArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $ErrorDetails
 * @property int|null $LastReceivedSequenceNumber
 * @property BillableTokenUsage|null $BillableTokenUsage
 * @property VpcConfig|null $VpcConfig
 * @property string|null $RoleArn
 * @property LoraConfig|null $LoraConfig
 * @property TrainingSessionModelConfig|null $ModelConfig
 * @property TrainingSessionOutputConfig|null $OutputConfig
 * @property list<Tag>|null $Tags
 */
class TrainingSessionDetail extends Shape
{
    /**
     * @param array{
     *     TrainingSessionArn: string,
     *     TrainingSessionName: string,
     *     TrainingSessionStatus: 'Created'|'Blocked'|'Running'|'Failed'|'Scheduled'|'Stopping'|'Stopped'|'Expired'|'Deleting'|'DeletionFailed',
     *     ModelPackageGroupArn?: string|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     ErrorDetails?: string|null,
     *     LastReceivedSequenceNumber?: int|null,
     *     BillableTokenUsage?: BillableTokenUsage|null,
     *     VpcConfig?: VpcConfig|null,
     *     RoleArn?: string|null,
     *     LoraConfig?: LoraConfig|null,
     *     ModelConfig?: TrainingSessionModelConfig|null,
     *     OutputConfig?: TrainingSessionOutputConfig|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
