<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ImportTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property 'S'|'N'|'B' $AttributeType
 */
class AttributeDefinition extends Shape
{
    /**
     * @param array{
     *     AttributeName: string,
     *     AttributeType: 'S'|'N'|'B'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
