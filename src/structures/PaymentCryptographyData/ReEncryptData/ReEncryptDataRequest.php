<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\ReEncryptData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IncomingKeyIdentifier
 * @property string $OutgoingKeyIdentifier
 * @property string $CipherText
 * @property Shapes\ReEncryptionAttributes $IncomingEncryptionAttributes
 * @property Shapes\ReEncryptionAttributes $OutgoingEncryptionAttributes
 * @property Shapes\WrappedKey|null $IncomingWrappedKey
 * @property Shapes\WrappedKey|null $OutgoingWrappedKey
 */
class ReEncryptDataRequest extends Request
{
    /**
     * @param array{
     *     IncomingKeyIdentifier: string,
     *     OutgoingKeyIdentifier: string,
     *     CipherText: string,
     *     IncomingEncryptionAttributes: Shapes\ReEncryptionAttributes,
     *     OutgoingEncryptionAttributes: Shapes\ReEncryptionAttributes,
     *     IncomingWrappedKey?: Shapes\WrappedKey|null,
     *     OutgoingWrappedKey?: Shapes\WrappedKey|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
