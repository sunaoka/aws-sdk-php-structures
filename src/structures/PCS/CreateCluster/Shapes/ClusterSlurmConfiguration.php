<?php

namespace Sunaoka\Aws\Structures\PCS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $scaleDownIdleTimeInSeconds
 * @property list<SlurmCustomSetting> $slurmCustomSettings
 * @property SlurmAuthKey $authKey
 */
class ClusterSlurmConfiguration extends Shape
{
    /**
     * @param array{
     *     scaleDownIdleTimeInSeconds?: int,
     *     slurmCustomSettings?: list<SlurmCustomSetting>,
     *     authKey?: SlurmAuthKey
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
