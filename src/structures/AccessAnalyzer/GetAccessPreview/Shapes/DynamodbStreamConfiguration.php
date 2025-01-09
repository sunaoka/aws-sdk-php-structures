<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $streamPolicy
 */
class DynamodbStreamConfiguration extends Shape
{
    /**
     * @param array{streamPolicy?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
