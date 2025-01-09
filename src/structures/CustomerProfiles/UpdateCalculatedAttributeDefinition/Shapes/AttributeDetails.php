<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateCalculatedAttributeDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeItem> $Attributes
 * @property string $Expression
 */
class AttributeDetails extends Shape
{
    /**
     * @param array{
     *     Attributes: list<AttributeItem>,
     *     Expression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
