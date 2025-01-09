<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Facetable
 * @property bool $Searchable
 * @property bool $Displayable
 * @property bool $Sortable
 */
class Search extends Shape
{
    /**
     * @param array{
     *     Facetable?: bool,
     *     Searchable?: bool,
     *     Displayable?: bool,
     *     Sortable?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
