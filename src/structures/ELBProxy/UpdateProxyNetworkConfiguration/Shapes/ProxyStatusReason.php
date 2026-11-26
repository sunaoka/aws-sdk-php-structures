<?php

namespace Sunaoka\Aws\Structures\ELBProxy\UpdateProxyNetworkConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string|null $target
 * @property string|null $message
 */
class ProxyStatusReason extends Shape
{
    /**
     * @param array{
     *     code: string,
     *     target?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
