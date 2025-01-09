<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeSenderIds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SenderId
 * @property string $IsoCountryCode
 */
class SenderIdAndCountry extends Shape
{
    /**
     * @param array{
     *     SenderId: string,
     *     IsoCountryCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
