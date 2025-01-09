<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 */
class DeleteGlobalSecondaryIndexAction extends Shape
{
    /**
     * @param array{IndexName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
