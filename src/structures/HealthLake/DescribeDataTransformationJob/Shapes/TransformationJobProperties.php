<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeDataTransformationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property 'SUBMITTED'|'QUEUED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED' $JobStatus
 * @property TransformationInputDataConfig $InputDataConfig
 * @property TransformationOutputDataConfig $OutputDataConfig
 * @property string $DataAccessRoleArn
 * @property \Aws\Api\DateTimeResult $SubmitTime
 * @property string|null $JobName
 * @property string|null $ProfileId
 * @property string|null $ProfileName
 * @property int|null $ProfileVersion
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property bool|null $DriftDetectionEnabled
 * @property bool|null $ProvenanceEnabled
 * @property string|null $Message
 * @property TransformationJobProgressReport|null $JobProgressReport
 */
class TransformationJobProperties extends Shape
{
    /**
     * @param array{
     *     JobId: string,
     *     JobStatus: 'SUBMITTED'|'QUEUED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED',
     *     InputDataConfig: TransformationInputDataConfig,
     *     OutputDataConfig: TransformationOutputDataConfig,
     *     DataAccessRoleArn: string,
     *     SubmitTime: \Aws\Api\DateTimeResult,
     *     JobName?: string|null,
     *     ProfileId?: string|null,
     *     ProfileName?: string|null,
     *     ProfileVersion?: int|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     DriftDetectionEnabled?: bool|null,
     *     ProvenanceEnabled?: bool|null,
     *     Message?: string|null,
     *     JobProgressReport?: TransformationJobProgressReport|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
