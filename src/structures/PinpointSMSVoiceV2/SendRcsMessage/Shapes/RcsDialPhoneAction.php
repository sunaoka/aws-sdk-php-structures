<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property string $PostbackData
 * @property string $PhoneNumber
 */
class RcsDialPhoneAction extends Shape
{
    /**
     * @param array{
     *     Text: string,
     *     PostbackData: string,
     *     PhoneNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
