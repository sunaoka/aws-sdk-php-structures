<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property string $PostbackData
 * @property double $Latitude
 * @property double $Longitude
 * @property string|null $Label
 */
class RcsShowLocationAction extends Shape
{
    /**
     * @param array{
     *     Text: string,
     *     PostbackData: string,
     *     Latitude: double,
     *     Longitude: double,
     *     Label?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
