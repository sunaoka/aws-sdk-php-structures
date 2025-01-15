<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property array<string, OpsEntityItem>|null $Data
 */
class OpsEntity extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Data?: array<string, OpsEntityItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
