<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyMac;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property string $MessageData
 * @property string $Mac
 * @property Shapes\MacAttributes $VerificationAttributes
 * @property int<4, 16>|null $MacLength
 */
class VerifyMacRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     MessageData: string,
     *     Mac: string,
     *     VerificationAttributes: Shapes\MacAttributes,
     *     MacLength?: int<4, 16>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
