<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $activeExperimentCount
 * @property int $activeLaunchCount
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string $description
 * @property int $experimentCount
 * @property int $featureCount
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property int $launchCount
 * @property string $name
 * @property 'AVAILABLE'|'UPDATING' $status
 * @property array<string, string> $tags
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     activeExperimentCount?: int,
     *     activeLaunchCount?: int,
     *     arn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     experimentCount?: int,
     *     featureCount?: int,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     launchCount?: int,
     *     name: string,
     *     status: 'AVAILABLE'|'UPDATING',
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
