<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConfluencePageToIndexFieldMapping> $PageFieldMappings
 */
class ConfluencePageConfiguration extends Shape
{
    /**
     * @param array{PageFieldMappings?: list<ConfluencePageToIndexFieldMapping>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
