<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMacEmvPinChange;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NewPinPekIdentifier
 * @property string $NewEncryptedPinBlock
 * @property 'ISO_FORMAT_0'|'ISO_FORMAT_1'|'ISO_FORMAT_3' $PinBlockFormat
 * @property string $SecureMessagingIntegrityKeyIdentifier
 * @property string $SecureMessagingConfidentialityKeyIdentifier
 * @property string $MessageData
 * @property Shapes\DerivationMethodAttributes $DerivationMethodAttributes
 */
class GenerateMacEmvPinChangeRequest extends Request
{
    /**
     * @param array{
     *     NewPinPekIdentifier: string,
     *     NewEncryptedPinBlock: string,
     *     PinBlockFormat: 'ISO_FORMAT_0'|'ISO_FORMAT_1'|'ISO_FORMAT_3',
     *     SecureMessagingIntegrityKeyIdentifier: string,
     *     SecureMessagingConfidentialityKeyIdentifier: string,
     *     MessageData: string,
     *     DerivationMethodAttributes: Shapes\DerivationMethodAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
