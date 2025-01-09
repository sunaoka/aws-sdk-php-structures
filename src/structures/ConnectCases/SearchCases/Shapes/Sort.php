<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fieldId
 * @property 'Asc'|'Desc' $sortOrder
 */
class Sort extends Shape
{
    /**
     * @param array{
     *     fieldId: string,
     *     sortOrder: 'Asc'|'Desc'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
