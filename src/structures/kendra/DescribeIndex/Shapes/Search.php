<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Facetable
 * @property bool|null $Searchable
 * @property bool|null $Displayable
 * @property bool|null $Sortable
 */
class Search extends Shape
{
    /**
     * @param array{
     *     Facetable?: bool|null,
     *     Searchable?: bool|null,
     *     Displayable?: bool|null,
     *     Sortable?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
