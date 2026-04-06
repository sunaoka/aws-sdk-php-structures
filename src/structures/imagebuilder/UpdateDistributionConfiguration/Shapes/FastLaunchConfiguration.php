<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property FastLaunchSnapshotConfiguration|null $snapshotConfiguration
 * @property int<1, max>|null $maxParallelLaunches
 * @property FastLaunchLaunchTemplateSpecification|null $launchTemplate
 * @property string|null $accountId
 */
class FastLaunchConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     snapshotConfiguration?: FastLaunchSnapshotConfiguration|null,
     *     maxParallelLaunches?: int<1, max>|null,
     *     launchTemplate?: FastLaunchLaunchTemplateSpecification|null,
     *     accountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
