<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LabelName
 */
class LabelNameCondition extends Shape
{
    /**
     * @param array{LabelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
