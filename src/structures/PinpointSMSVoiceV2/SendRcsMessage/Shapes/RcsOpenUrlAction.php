<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property string $PostbackData
 * @property string $Url
 * @property string|null $Application
 * @property string|null $WebviewViewMode
 */
class RcsOpenUrlAction extends Shape
{
    /**
     * @param array{
     *     Text: string,
     *     PostbackData: string,
     *     Url: string,
     *     Application?: string|null,
     *     WebviewViewMode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
