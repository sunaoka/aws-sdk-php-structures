<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\ReEncryptData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CipherText
 * @property Shapes\ReEncryptionAttributes $IncomingEncryptionAttributes
 * @property string $IncomingKeyIdentifier
 * @property Shapes\ReEncryptionAttributes $OutgoingEncryptionAttributes
 * @property string $OutgoingKeyIdentifier
 */
class ReEncryptDataRequest extends Request
{
    /**
     * @param array{
     *     CipherText: string,
     *     IncomingEncryptionAttributes: Shapes\ReEncryptionAttributes,
     *     IncomingKeyIdentifier: string,
     *     OutgoingEncryptionAttributes: Shapes\ReEncryptionAttributes,
     *     OutgoingKeyIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
