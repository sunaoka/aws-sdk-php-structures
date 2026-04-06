<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\EncryptData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EncryptionDecryptionAttributes $EncryptionAttributes
 * @property string $KeyIdentifier
 * @property string $PlainText
 */
class EncryptDataRequest extends Request
{
    /**
     * @param array{
     *     EncryptionAttributes: Shapes\EncryptionDecryptionAttributes,
     *     KeyIdentifier: string,
     *     PlainText: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
