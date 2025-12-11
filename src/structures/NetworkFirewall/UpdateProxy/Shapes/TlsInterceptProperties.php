<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PcaArn
 * @property 'ENABLED'|'DISABLED'|null $TlsInterceptMode
 */
class TlsInterceptProperties extends Shape
{
    /**
     * @param array{
     *     PcaArn?: string|null,
     *     TlsInterceptMode?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
