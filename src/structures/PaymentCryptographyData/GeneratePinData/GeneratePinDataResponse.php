<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GenerationKeyArn
 * @property string $GenerationKeyCheckValue
 * @property string $EncryptionKeyArn
 * @property string $EncryptionKeyCheckValue
 * @property string $EncryptedPinBlock
 * @property Shapes\PinData $PinData
 */
class GeneratePinDataResponse extends Response
{
}
