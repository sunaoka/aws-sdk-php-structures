<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConfluenceBlogToIndexFieldMapping>|null $BlogFieldMappings
 */
class ConfluenceBlogConfiguration extends Shape
{
    /**
     * @param array{BlogFieldMappings?: list<ConfluenceBlogToIndexFieldMapping>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
