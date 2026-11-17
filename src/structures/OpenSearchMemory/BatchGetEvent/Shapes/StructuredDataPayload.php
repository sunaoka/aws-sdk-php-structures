<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\BatchGetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StructuredDataSource $source
 */
class StructuredDataPayload extends Shape
{
    /**
     * @param array{source: StructuredDataSource} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
