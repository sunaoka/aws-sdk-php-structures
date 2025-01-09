<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 */
class DialogCodeHookSettings extends Shape
{
    /**
     * @param array{enabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
