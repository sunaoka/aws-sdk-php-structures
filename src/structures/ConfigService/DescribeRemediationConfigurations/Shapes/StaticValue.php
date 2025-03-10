<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Values
 */
class StaticValue extends Shape
{
    /**
     * @param array{Values: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
