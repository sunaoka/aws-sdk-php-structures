<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateProjectDataDelivery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $activeExperimentCount
 * @property int|null $activeLaunchCount
 * @property ProjectAppConfigResource|null $appConfigResource
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property ProjectDataDelivery|null $dataDelivery
 * @property string|null $description
 * @property int|null $experimentCount
 * @property int|null $featureCount
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property int|null $launchCount
 * @property string $name
 * @property 'AVAILABLE'|'UPDATING' $status
 * @property array<string, string>|null $tags
 */
class Project extends Shape
{
    /**
     * @param array{
     *     activeExperimentCount?: int|null,
     *     activeLaunchCount?: int|null,
     *     appConfigResource?: ProjectAppConfigResource|null,
     *     arn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     dataDelivery?: ProjectDataDelivery|null,
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
