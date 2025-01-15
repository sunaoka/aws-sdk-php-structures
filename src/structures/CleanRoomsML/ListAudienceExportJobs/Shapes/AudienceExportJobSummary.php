<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListAudienceExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $name
 * @property string $audienceGenerationJobArn
 * @property AudienceSize $audienceSize
 * @property string|null $description
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE' $status
 * @property StatusDetails|null $statusDetails
 * @property string|null $outputLocation
 */
class AudienceExportJobSummary extends Shape
{
    /**
     * @param array{
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     name: string,
     *     audienceGenerationJobArn: string,
     *     audienceSize: AudienceSize,
     *     description?: string|null,
     *     status: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE',
     *     statusDetails?: StatusDetails|null,
     *     outputLocation?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
