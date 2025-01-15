<?php

namespace Sunaoka\Aws\Structures\Route53\GetDNSSEC\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServeSignature
 * @property string|null $StatusMessage
 */
class DNSSECStatus extends Shape
{
    /**
     * @param array{
     *     ServeSignature?: string|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
