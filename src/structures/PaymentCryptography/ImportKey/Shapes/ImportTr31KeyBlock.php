<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WrappingKeyIdentifier
 * @property string $WrappedKeyBlock
 */
class ImportTr31KeyBlock extends Shape
{
    /**
     * @param array{
     *     WrappingKeyIdentifier: string,
     *     WrappedKeyBlock: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
