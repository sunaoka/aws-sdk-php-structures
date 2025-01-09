<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tableName
 */
class PutItemInput extends Shape
{
    /**
     * @param array{tableName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
