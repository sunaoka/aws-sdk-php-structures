<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeGeneratedTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MUTUALLY_EXCLUSIVE_PROPERTIES'|'UNSUPPORTED_PROPERTIES'|'MUTUALLY_EXCLUSIVE_TYPES' $Type
 * @property list<WarningProperty> $Properties
 */
class WarningDetail extends Shape
{
    /**
     * @param array{
     *     Type?: 'MUTUALLY_EXCLUSIVE_PROPERTIES'|'UNSUPPORTED_PROPERTIES'|'MUTUALLY_EXCLUSIVE_TYPES',
     *     Properties?: list<WarningProperty>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
