<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListTagOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 * @property bool $Active
 */
class ListTagOptionsFilters extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Value?: string,
     *     Active?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
