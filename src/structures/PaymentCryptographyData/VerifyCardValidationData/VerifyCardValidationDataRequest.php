<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyCardValidationData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property string $PrimaryAccountNumber
 * @property Shapes\CardVerificationAttributes $VerificationAttributes
 * @property string $ValidationData
 */
class VerifyCardValidationDataRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     PrimaryAccountNumber: string,
     *     VerificationAttributes: Shapes\CardVerificationAttributes,
     *     ValidationData: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
