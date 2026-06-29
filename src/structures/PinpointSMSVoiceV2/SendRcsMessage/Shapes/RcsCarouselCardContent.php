<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Title
 * @property string|null $Description
 * @property RcsCarouselCardMedia|null $Media
 * @property list<RcsSuggestedAction>|null $Suggestions
 */
class RcsCarouselCardContent extends Shape
{
    /**
     * @param array{
     *     Title?: string|null,
     *     Description?: string|null,
     *     Media?: RcsCarouselCardMedia|null,
     *     Suggestions?: list<RcsSuggestedAction>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
