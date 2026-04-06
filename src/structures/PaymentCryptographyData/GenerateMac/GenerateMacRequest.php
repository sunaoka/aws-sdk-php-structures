<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMac;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\MacAttributes $GenerationAttributes
 * @property string $KeyIdentifier
 * @property int<4, 16>|null $MacLength
 * @property string $MessageData
 */
class GenerateMacRequest extends Request
{
    /**
     * @param array{
     *     GenerationAttributes: Shapes\MacAttributes,
     *     KeyIdentifier: string,
     *     MacLength?: int<4, 16>|null,
     *     MessageData: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
