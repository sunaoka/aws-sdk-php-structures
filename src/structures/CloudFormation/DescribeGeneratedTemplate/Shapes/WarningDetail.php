<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeGeneratedTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MUTUALLY_EXCLUSIVE_PROPERTIES'|'UNSUPPORTED_PROPERTIES'|'MUTUALLY_EXCLUSIVE_TYPES'|'EXCLUDED_PROPERTIES'|'EXCLUDED_RESOURCES'|null $Type
 * @property list<WarningProperty>|null $Properties
 */
class WarningDetail extends Shape
{
    /**
     * @param array{
     *     Type?: 'MUTUALLY_EXCLUSIVE_PROPERTIES'|'UNSUPPORTED_PROPERTIES'|'MUTUALLY_EXCLUSIVE_TYPES'|'EXCLUDED_PROPERTIES'|'EXCLUDED_RESOURCES'|null,
     *     Properties?: list<WarningProperty>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
