<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetRecommendationReportDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $completionTime
 * @property string|null $s3Bucket
 * @property list<string>|null $s3Keys
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'FAILED'|'IN_PROGRESS'|'SUCCESS'|null $status
 * @property string|null $statusMessage
 */
class RecommendationReportDetails extends Shape
{
    /**
     * @param array{
     *     completionTime?: \Aws\Api\DateTimeResult|null,
     *     s3Bucket?: string|null,
     *     s3Keys?: list<string>|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'FAILED'|'IN_PROGRESS'|'SUCCESS'|null,
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
