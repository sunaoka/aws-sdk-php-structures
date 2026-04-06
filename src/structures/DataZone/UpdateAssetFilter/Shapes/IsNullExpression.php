<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAssetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $columnName
 */
class IsNullExpression extends Shape
{
    /**
     * @param array{columnName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
