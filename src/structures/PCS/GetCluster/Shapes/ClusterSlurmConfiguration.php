<?php

namespace Sunaoka\Aws\Structures\PCS\GetCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $scaleDownIdleTimeInSeconds
 * @property list<SlurmCustomSetting>|null $slurmCustomSettings
 * @property SlurmAuthKey|null $authKey
 */
class ClusterSlurmConfiguration extends Shape
{
    /**
     * @param array{
     *     scaleDownIdleTimeInSeconds?: int<1, max>|null,
     *     slurmCustomSettings?: list<SlurmCustomSetting>|null,
     *     authKey?: SlurmAuthKey|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
