<?php

namespace Sunaoka\Aws\Structures\mgn\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $exportIDs
 */
class ListExportsRequestFilters extends Shape
{
    /**
     * @param array{exportIDs?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
