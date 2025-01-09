<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WrappingKeyIdentifier
 * @property KeyBlockHeaders $KeyBlockHeaders
 */
class ExportTr31KeyBlock extends Shape
{
    /**
     * @param array{
     *     WrappingKeyIdentifier: string,
     *     KeyBlockHeaders?: KeyBlockHeaders
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
