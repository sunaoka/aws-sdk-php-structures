<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $completionTime
 * @property int|null $failed
 * @property int|null $inProgress
 * @property int|null $servers
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPED'|null $status
 * @property string|null $statusMessage
 * @property int|null $success
 */
class DataCollectionDetails extends Shape
{
    /**
     * @param array{
     *     completionTime?: \Aws\Api\DateTimeResult|null,
     *     failed?: int|null,
     *     inProgress?: int|null,
     *     servers?: int|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPED'|null,
     *     statusMessage?: string|null,
     *     success?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
