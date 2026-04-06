<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $activeExperimentCount
 * @property int|null $activeLaunchCount
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string|null $description
 * @property int|null $experimentCount
 * @property int|null $featureCount
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property int|null $launchCount
 * @property string $name
 * @property 'AVAILABLE'|'UPDATING' $status
 * @property array<string, string>|null $tags
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     activeExperimentCount?: int|null,
     *     activeLaunchCount?: int|null,
     *     arn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     experimentCount?: int|null,
     *     featureCount?: int|null,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     launchCount?: int|null,
     *     name: string,
     *     status: 'AVAILABLE'|'UPDATING',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
