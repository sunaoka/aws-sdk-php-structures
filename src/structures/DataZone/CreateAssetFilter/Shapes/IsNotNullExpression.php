<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $columnName
 */
class IsNotNullExpression extends Shape
{
    /**
     * @param array{columnName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
