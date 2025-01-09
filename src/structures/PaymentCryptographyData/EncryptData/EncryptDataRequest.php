<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\EncryptData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property string $PlainText
 * @property Shapes\EncryptionDecryptionAttributes $EncryptionAttributes
 * @property Shapes\WrappedKey $WrappedKey
 */
class EncryptDataRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     PlainText: string,
     *     EncryptionAttributes: Shapes\EncryptionDecryptionAttributes,
     *     WrappedKey?: Shapes\WrappedKey
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
