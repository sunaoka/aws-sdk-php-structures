<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $completionTime
 * @property int $failed
 * @property int $inProgress
 * @property int $servers
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPED' $status
 * @property string $statusMessage
 * @property int $success
 */
class DataCollectionDetails extends Shape
{
    /**
     * @param array{
     *     completionTime?: \Aws\Api\DateTimeResult,
     *     failed?: int,
     *     inProgress?: int,
     *     servers?: int,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     status?: 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPED',
     *     statusMessage?: string,
     *     success?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
