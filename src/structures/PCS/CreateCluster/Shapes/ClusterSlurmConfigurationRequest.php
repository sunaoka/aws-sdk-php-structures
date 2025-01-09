<?php

namespace Sunaoka\Aws\Structures\PCS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $scaleDownIdleTimeInSeconds
 * @property list<SlurmCustomSetting> $slurmCustomSettings
 */
class ClusterSlurmConfigurationRequest extends Shape
{
    /**
     * @param array{
     *     scaleDownIdleTimeInSeconds?: int<1, max>,
     *     slurmCustomSettings?: list<SlurmCustomSetting>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
