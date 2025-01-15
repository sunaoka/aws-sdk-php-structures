<?php

namespace Sunaoka\Aws\Structures\mgn\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $importIDs
 */
class ListImportsRequestFilters extends Shape
{
    /**
     * @param array{importIDs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
