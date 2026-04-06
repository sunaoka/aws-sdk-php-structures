<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EncryptedPinBlock
 * @property string $EncryptionKeyArn
 * @property string $EncryptionKeyCheckValue
 * @property string $GenerationKeyArn
 * @property string $GenerationKeyCheckValue
 * @property Shapes\PinData $PinData
 */
class GeneratePinDataResponse extends Response
{
}
