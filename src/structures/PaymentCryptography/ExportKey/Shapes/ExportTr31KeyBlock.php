<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WrappingKeyIdentifier
 * @property KeyBlockHeaders|null $KeyBlockHeaders
 */
class ExportTr31KeyBlock extends Shape
{
    /**
     * @param array{
     *     WrappingKeyIdentifier: string,
     *     KeyBlockHeaders?: KeyBlockHeaders|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
