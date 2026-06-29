<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileUrl
 * @property string|null $ThumbnailUrl
 */
class RcsFileMessage extends Shape
{
    /**
     * @param array{
     *     FileUrl: string,
     *     ThumbnailUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
