<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LanguageCode
 * @property string $Name
 * @property CaptionSelectorSettings $SelectorSettings
 */
class CaptionSelector extends Shape
{
    /**
     * @param array{
     *     LanguageCode?: string,
     *     Name: string,
     *     SelectorSettings?: CaptionSelectorSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
