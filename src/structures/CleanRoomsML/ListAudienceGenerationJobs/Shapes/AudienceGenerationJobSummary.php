<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListAudienceGenerationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $audienceGenerationJobArn
 * @property string $name
 * @property string|null $description
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $status
 * @property string $configuredAudienceModelArn
 * @property string|null $collaborationId
 * @property string|null $startedBy
 */
class AudienceGenerationJobSummary extends Shape
{
    /**
     * @param array{
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     audienceGenerationJobArn: string,
     *     name: string,
     *     description?: string|null,
     *     status: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED',
     *     configuredAudienceModelArn: string,
     *     collaborationId?: string|null,
     *     startedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
