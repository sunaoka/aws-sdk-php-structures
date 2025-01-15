<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRemediationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SsmControls|null $SsmControls
 */
class ExecutionControls extends Shape
{
    /**
     * @param array{SsmControls?: SsmControls|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
