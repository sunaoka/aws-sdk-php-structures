<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DETAILED_STATUS'|'LAST_OPERATION_ID'|'DRIFT_STATUS'|null $Name
 * @property string|null $Values
 */
class StackInstanceFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'DETAILED_STATUS'|'LAST_OPERATION_ID'|'DRIFT_STATUS'|null,
     *     Values?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
