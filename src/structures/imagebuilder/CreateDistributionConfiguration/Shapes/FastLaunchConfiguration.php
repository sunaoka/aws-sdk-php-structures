<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property FastLaunchSnapshotConfiguration $snapshotConfiguration
 * @property int<1, max> $maxParallelLaunches
 * @property FastLaunchLaunchTemplateSpecification $launchTemplate
 * @property string $accountId
 */
class FastLaunchConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     snapshotConfiguration?: FastLaunchSnapshotConfiguration,
     *     maxParallelLaunches?: int<1, max>,
     *     launchTemplate?: FastLaunchLaunchTemplateSpecification,
     *     accountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
