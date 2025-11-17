<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000000>|null $scaleDownIdleTimeInSeconds
 * @property list<SlurmCustomSetting>|null $slurmCustomSettings
 * @property UpdateAccountingRequest|null $accounting
 * @property UpdateSlurmRestRequest|null $slurmRest
 */
class UpdateClusterSlurmConfigurationRequest extends Shape
{
    /**
     * @param array{
     *     scaleDownIdleTimeInSeconds?: int<1, 10000000>|null,
     *     slurmCustomSettings?: list<SlurmCustomSetting>|null,
     *     accounting?: UpdateAccountingRequest|null,
     *     slurmRest?: UpdateSlurmRestRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
