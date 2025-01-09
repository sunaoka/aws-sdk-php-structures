<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SsmControls $SsmControls
 */
class ExecutionControls extends Shape
{
    /**
     * @param array{SsmControls?: SsmControls} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
