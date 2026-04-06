<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchAllRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AssociationTime'|'CaseId' $sortProperty
 * @property 'Asc'|'Desc' $sortOrder
 */
class SearchAllRelatedItemsSort extends Shape
{
    /**
     * @param array{
     *     sortProperty: 'AssociationTime'|'CaseId',
     *     sortOrder: 'Asc'|'Desc'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
