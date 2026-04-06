<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\DecryptData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CipherText
 * @property Shapes\EncryptionDecryptionAttributes $DecryptionAttributes
 * @property string $KeyIdentifier
 */
class DecryptDataRequest extends Request
{
    /**
     * @param array{
     *     CipherText: string,
     *     DecryptionAttributes: Shapes\EncryptionDecryptionAttributes,
     *     KeyIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
