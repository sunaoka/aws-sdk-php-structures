<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SlurmCustomSetting> $slurmCustomSettings
 */
class ComputeNodeGroupSlurmConfiguration extends Shape
{
    /**
     * @param array{slurmCustomSettings?: list<SlurmCustomSetting>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
