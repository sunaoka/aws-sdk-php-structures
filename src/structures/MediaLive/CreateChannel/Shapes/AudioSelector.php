<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property AudioSelectorSettings|null $SelectorSettings
 */
class AudioSelector extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     SelectorSettings?: AudioSelectorSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
