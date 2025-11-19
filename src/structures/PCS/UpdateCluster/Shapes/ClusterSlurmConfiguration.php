<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000000>|null $scaleDownIdleTimeInSeconds
 * @property list<SlurmCustomSetting>|null $slurmCustomSettings
 * @property SlurmAuthKey|null $authKey
 * @property JwtAuth|null $jwtAuth
 * @property Accounting|null $accounting
 * @property SlurmRest|null $slurmRest
 */
class ClusterSlurmConfiguration extends Shape
{
    /**
     * @param array{
     *     scaleDownIdleTimeInSeconds?: int<1, 10000000>|null,
     *     slurmCustomSettings?: list<SlurmCustomSetting>|null,
     *     authKey?: SlurmAuthKey|null,
     *     jwtAuth?: JwtAuth|null,
     *     accounting?: Accounting|null,
     *     slurmRest?: SlurmRest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
