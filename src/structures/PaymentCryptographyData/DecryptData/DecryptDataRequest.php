<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\DecryptData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property string $CipherText
 * @property Shapes\EncryptionDecryptionAttributes $DecryptionAttributes
 * @property Shapes\WrappedKey $WrappedKey
 */
class DecryptDataRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     CipherText: string,
     *     DecryptionAttributes: Shapes\EncryptionDecryptionAttributes,
     *     WrappedKey?: Shapes\WrappedKey
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
