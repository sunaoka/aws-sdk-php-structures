<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KeyAttributes $KeyAttributes
 * @property bool $Exportable
 * @property string $WrappedKeyCryptogram
 * @property string $ImportToken
 * @property 'RSA_OAEP_SHA_256'|'RSA_OAEP_SHA_512' $WrappingSpec
 */
class ImportKeyCryptogram extends Shape
{
    /**
     * @param array{
     *     KeyAttributes: KeyAttributes,
     *     Exportable: bool,
     *     WrappedKeyCryptogram: string,
     *     ImportToken: string,
     *     WrappingSpec?: 'RSA_OAEP_SHA_256'|'RSA_OAEP_SHA_512'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
