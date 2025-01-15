<?php

namespace Sunaoka\Aws\Structures\mgn\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $exportIDs
 */
class ListExportsRequestFilters extends Shape
{
    /**
     * @param array{exportIDs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
