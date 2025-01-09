<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConfluenceBlogToIndexFieldMapping> $BlogFieldMappings
 */
class ConfluenceBlogConfiguration extends Shape
{
    /**
     * @param array{BlogFieldMappings?: list<ConfluenceBlogToIndexFieldMapping>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
