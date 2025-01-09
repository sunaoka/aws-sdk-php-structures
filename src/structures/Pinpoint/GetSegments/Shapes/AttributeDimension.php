<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUSIVE'|'EXCLUSIVE'|'CONTAINS'|'BEFORE'|'AFTER'|'BETWEEN'|'ON' $AttributeType
 * @property list<string> $Values
 */
class AttributeDimension extends Shape
{
    /**
     * @param array{
     *     AttributeType?: 'INCLUSIVE'|'EXCLUSIVE'|'CONTAINS'|'BEFORE'|'AFTER'|'BETWEEN'|'ON',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
