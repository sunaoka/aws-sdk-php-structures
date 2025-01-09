<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ipAddress
 * @property string $userAgent
 */
class ThreatActorIp extends Shape
{
    /**
     * @param array{
     *     ipAddress: string,
     *     userAgent?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
