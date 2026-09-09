<?php

namespace Sunaoka\Aws\Structures\PCS\CreateComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1, 10000000>|null $scaleDownIdleTimeInSeconds
 * @property list<SlurmCustomSetting>|null $slurmCustomSettings
 * @property list<array<string, string>>|null $gresCustomSettings
 */
class ComputeNodeGroupSlurmConfiguration extends Shape
{
    /**
     * @param array{
     *     scaleDownIdleTimeInSeconds?: int<-1, 10000000>|null,
     *     slurmCustomSettings?: list<SlurmCustomSetting>|null,
     *     gresCustomSettings?: list<array<string, string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
