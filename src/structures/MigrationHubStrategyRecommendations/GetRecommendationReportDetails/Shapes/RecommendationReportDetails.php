<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetRecommendationReportDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $completionTime
 * @property string $s3Bucket
 * @property list<string> $s3Keys
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'FAILED'|'IN_PROGRESS'|'SUCCESS' $status
 * @property string $statusMessage
 */
class RecommendationReportDetails extends Shape
{
    /**
     * @param array{
     *     completionTime?: \Aws\Api\DateTimeResult,
     *     s3Bucket?: string,
     *     s3Keys?: list<string>,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     status?: 'FAILED'|'IN_PROGRESS'|'SUCCESS',
     *     statusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
