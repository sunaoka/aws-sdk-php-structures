<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IoTJobAbortCriteria> $criteriaList
 */
class IoTJobAbortConfig extends Shape
{
    /**
     * @param array{criteriaList: list<IoTJobAbortCriteria>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
