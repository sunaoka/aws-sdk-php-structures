<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AudioSelectorNames
 */
class AudioSelectorGroup extends Shape
{
    /**
     * @param array{AudioSelectorNames?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
