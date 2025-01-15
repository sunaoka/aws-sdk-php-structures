<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AudioSelectorNames
 */
class AudioSelectorGroup extends Shape
{
    /**
     * @param array{AudioSelectorNames?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
