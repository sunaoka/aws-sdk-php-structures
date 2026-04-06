<?php

namespace Sunaoka\Aws\Structures\PCS\CreateComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SlurmCustomSetting>|null $slurmCustomSettings
 */
class ComputeNodeGroupSlurmConfiguration extends Shape
{
    /**
     * @param array{slurmCustomSettings?: list<SlurmCustomSetting>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
