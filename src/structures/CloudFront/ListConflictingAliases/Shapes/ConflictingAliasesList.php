<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListConflictingAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NextMarker
 * @property int|null $MaxItems
 * @property int|null $Quantity
 * @property list<ConflictingAlias>|null $Items
 */
class ConflictingAliasesList extends Shape
{
    /**
     * @param array{
     *     NextMarker?: string|null,
     *     MaxItems?: int|null,
     *     Quantity?: int|null,
     *     Items?: list<ConflictingAlias>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
