<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3000, 30000> $Port
 * @property 'ENABLED'|'DISABLED'|null $ForwardErrorCorrection
 */
class RtpRouterInputConfiguration extends Shape
{
    /**
     * @param array{
     *     Port: int<3000, 30000>,
     *     ForwardErrorCorrection?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
