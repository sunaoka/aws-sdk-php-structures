<?php

namespace Sunaoka\Aws\Structures\Iot\GetCommandExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reasonCode
 * @property string $reasonDescription
 */
class StatusReason extends Shape
{
    /**
     * @param array{
     *     reasonCode: string,
     *     reasonDescription?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
