<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyCardValidationData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property string $PrimaryAccountNumber
 * @property string $ValidationData
 * @property Shapes\CardVerificationAttributes $VerificationAttributes
 */
class VerifyCardValidationDataRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     PrimaryAccountNumber: string,
     *     ValidationData: string,
     *     VerificationAttributes: Shapes\CardVerificationAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
