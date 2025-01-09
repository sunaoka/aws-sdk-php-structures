<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetCalculatedAttributeDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, FilterAttributeDimension> $Attributes
 */
class FilterDimension extends Shape
{
    /**
     * @param array{Attributes: array<string, FilterAttributeDimension>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
