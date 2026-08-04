<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 */
class VectorAttributeDefinition extends Shape
{
    /**
     * @param array{AttributeName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
