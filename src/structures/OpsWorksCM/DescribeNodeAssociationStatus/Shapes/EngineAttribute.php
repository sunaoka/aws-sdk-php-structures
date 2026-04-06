<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeNodeAssociationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Value
 */
class EngineAttribute extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
