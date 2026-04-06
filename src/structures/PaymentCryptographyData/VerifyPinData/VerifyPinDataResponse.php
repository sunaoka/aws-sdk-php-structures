<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyPinData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EncryptionKeyArn
 * @property string $EncryptionKeyCheckValue
 * @property string $VerificationKeyArn
 * @property string $VerificationKeyCheckValue
 */
class VerifyPinDataResponse extends Response
{
}
