<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WrappedKeyBlock
 * @property string $WrappingKeyIdentifier
 */
class ImportTr31KeyBlock extends Shape
{
    /**
     * @param array{
     *     WrappedKeyBlock: string,
     *     WrappingKeyIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
