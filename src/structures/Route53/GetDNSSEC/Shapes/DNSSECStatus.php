<?php

namespace Sunaoka\Aws\Structures\Route53\GetDNSSEC\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServeSignature
 * @property string $StatusMessage
 */
class DNSSECStatus extends Shape
{
    /**
     * @param array{
     *     ServeSignature?: string,
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
