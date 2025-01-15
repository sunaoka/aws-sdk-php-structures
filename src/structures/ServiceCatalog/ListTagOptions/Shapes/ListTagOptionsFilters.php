<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListTagOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $Value
 * @property bool|null $Active
 */
class ListTagOptionsFilters extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Value?: string|null,
     *     Active?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
