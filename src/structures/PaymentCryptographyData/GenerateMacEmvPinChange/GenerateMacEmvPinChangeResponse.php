<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMacEmvPinChange;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NewPinPekArn
 * @property string $SecureMessagingIntegrityKeyArn
 * @property string $SecureMessagingConfidentialityKeyArn
 * @property string $Mac
 * @property string $EncryptedPinBlock
 * @property string $NewPinPekKeyCheckValue
 * @property string $SecureMessagingIntegrityKeyCheckValue
 * @property string $SecureMessagingConfidentialityKeyCheckValue
 * @property Shapes\VisaAmexDerivationOutputs $VisaAmexDerivationOutputs
 */
class GenerateMacEmvPinChangeResponse extends Response
{
}
