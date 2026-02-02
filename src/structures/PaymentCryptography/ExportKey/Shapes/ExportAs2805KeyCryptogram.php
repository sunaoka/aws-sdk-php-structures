<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WrappingKeyIdentifier
 * @property 'TERMINAL_MAJOR_KEY_VARIANT_00'|'PIN_ENCRYPTION_KEY_VARIANT_28'|'MESSAGE_AUTHENTICATION_KEY_VARIANT_24'|'DATA_ENCRYPTION_KEY_VARIANT_22' $As2805KeyVariant
 */
class ExportAs2805KeyCryptogram extends Shape
{
    /**
     * @param array{
     *     WrappingKeyIdentifier: string,
     *     As2805KeyVariant: 'TERMINAL_MAJOR_KEY_VARIANT_00'|'PIN_ENCRYPTION_KEY_VARIANT_28'|'MESSAGE_AUTHENTICATION_KEY_VARIANT_24'|'DATA_ENCRYPTION_KEY_VARIANT_22'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
