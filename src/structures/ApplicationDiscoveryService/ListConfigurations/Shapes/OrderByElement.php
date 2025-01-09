<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\ListConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fieldName
 * @property 'ASC'|'DESC' $sortOrder
 */
class OrderByElement extends Shape
{
    /**
     * @param array{
     *     fieldName: string,
     *     sortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
