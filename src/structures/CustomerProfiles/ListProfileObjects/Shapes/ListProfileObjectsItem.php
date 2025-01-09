<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObjectTypeName
 * @property string $ProfileObjectUniqueKey
 * @property string $Object
 */
class ListProfileObjectsItem extends Shape
{
    /**
     * @param array{
     *     ObjectTypeName?: string,
     *     ProfileObjectUniqueKey?: string,
     *     Object?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
