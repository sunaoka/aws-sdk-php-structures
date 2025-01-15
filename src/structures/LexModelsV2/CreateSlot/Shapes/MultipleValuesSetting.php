<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $allowMultipleValues
 */
class MultipleValuesSetting extends Shape
{
    /**
     * @param array{allowMultipleValues?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
