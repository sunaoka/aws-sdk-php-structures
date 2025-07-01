<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationTrainedModelExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $name
 * @property TrainedModelExportOutputConfiguration $outputConfiguration
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE' $status
 * @property StatusDetails|null $statusDetails
 * @property string|null $description
 * @property string $creatorAccountId
 * @property string $trainedModelArn
 * @property string|null $trainedModelVersionIdentifier
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 */
class CollaborationTrainedModelExportJobSummary extends Shape
{
    /**
     * @param array{
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     name: string,
     *     outputConfiguration: TrainedModelExportOutputConfiguration,
     *     status: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE',
     *     statusDetails?: StatusDetails|null,
     *     description?: string|null,
     *     creatorAccountId: string,
     *     trainedModelArn: string,
     *     trainedModelVersionIdentifier?: string|null,
     *     membershipIdentifier: string,
     *     collaborationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
