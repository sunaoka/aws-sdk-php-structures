<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property array<string, OpsEntityItem> $Data
 */
class OpsEntity extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Data?: array<string, OpsEntityItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
