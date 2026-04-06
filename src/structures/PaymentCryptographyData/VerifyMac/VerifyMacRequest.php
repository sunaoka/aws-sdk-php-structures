<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyMac;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property string $Mac
 * @property int<4, 16>|null $MacLength
 * @property string $MessageData
 * @property Shapes\MacAttributes $VerificationAttributes
 */
class VerifyMacRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     Mac: string,
     *     MacLength?: int<4, 16>|null,
     *     MessageData: string,
     *     VerificationAttributes: Shapes\MacAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
