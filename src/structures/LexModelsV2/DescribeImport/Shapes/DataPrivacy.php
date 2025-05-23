<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $childDirected
 */
class DataPrivacy extends Shape
{
    /**
     * @param array{childDirected: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
