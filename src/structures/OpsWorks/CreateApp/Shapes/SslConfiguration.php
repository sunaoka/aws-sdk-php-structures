<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Certificate
 * @property string $PrivateKey
 * @property string $Chain
 */
class SslConfiguration extends Shape
{
    /**
     * @param array{
     *     Certificate: string,
     *     PrivateKey: string,
     *     Chain?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
