<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ObjectTypeName
 * @property string|null $ProfileObjectUniqueKey
 * @property string|null $Object
 */
class ListProfileObjectsItem extends Shape
{
    /**
     * @param array{
     *     ObjectTypeName?: string|null,
     *     ProfileObjectUniqueKey?: string|null,
     *     Object?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
