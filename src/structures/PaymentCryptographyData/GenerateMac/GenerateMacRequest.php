<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMac;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property string $MessageData
 * @property Shapes\MacAttributes $GenerationAttributes
 * @property int $MacLength
 */
class GenerateMacRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     MessageData: string,
     *     GenerationAttributes: Shapes\MacAttributes,
     *     MacLength?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
