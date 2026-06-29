<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CardOrientation
 * @property string|null $ThumbnailImageAlignment
 * @property RcsCardContent $CardContent
 */
class RcsStandaloneCard extends Shape
{
    /**
     * @param array{
     *     CardOrientation: string,
     *     ThumbnailImageAlignment?: string|null,
     *     CardContent: RcsCardContent
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
