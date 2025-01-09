<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeExclusions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSTANCE_ID'|'RULES_PACKAGE_ARN' $key
 * @property string $value
 */
class Scope extends Shape
{
    /**
     * @param array{
     *     key?: 'INSTANCE_ID'|'RULES_PACKAGE_ARN',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
