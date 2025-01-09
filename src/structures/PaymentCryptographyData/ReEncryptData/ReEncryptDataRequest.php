<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\ReEncryptData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IncomingKeyIdentifier
 * @property string $OutgoingKeyIdentifier
 * @property string $CipherText
 * @property Shapes\ReEncryptionAttributes $IncomingEncryptionAttributes
 * @property Shapes\ReEncryptionAttributes $OutgoingEncryptionAttributes
 * @property Shapes\WrappedKey $IncomingWrappedKey
 * @property Shapes\WrappedKey $OutgoingWrappedKey
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
     *     IncomingWrappedKey?: Shapes\WrappedKey,
     *     OutgoingWrappedKey?: Shapes\WrappedKey
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
