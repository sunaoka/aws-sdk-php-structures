<?php

namespace Sunaoka\Aws\Structures\PCS\GetCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $scaleDownIdleTimeInSeconds
 * @property list<SlurmCustomSetting> $slurmCustomSettings
 * @property SlurmAuthKey $authKey
 */
class ClusterSlurmConfiguration extends Shape
{
    /**
     * @param array{
     *     scaleDownIdleTimeInSeconds?: int<1, max>,
     *     slurmCustomSettings?: list<SlurmCustomSetting>,
     *     authKey?: SlurmAuthKey
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
