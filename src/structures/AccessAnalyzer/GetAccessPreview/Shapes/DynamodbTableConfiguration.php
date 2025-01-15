<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $tablePolicy
 */
class DynamodbTableConfiguration extends Shape
{
    /**
     * @param array{tablePolicy?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
