<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property AudioSelectorSettings $SelectorSettings
 */
class AudioSelector extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     SelectorSettings?: AudioSelectorSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
