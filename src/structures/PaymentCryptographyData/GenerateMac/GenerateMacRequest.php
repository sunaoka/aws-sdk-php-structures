<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMac;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property string $MessageData
 * @property Shapes\MacAttributes $GenerationAttributes
 * @property int<4, 32>|null $MacLength
 */
class GenerateMacRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     MessageData: string,
     *     GenerationAttributes: Shapes\MacAttributes,
     *     MacLength?: int<4, 32>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
