<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListConflictingAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NextMarker
 * @property int $MaxItems
 * @property int $Quantity
 * @property list<ConflictingAlias> $Items
 */
class ConflictingAliasesList extends Shape
{
    /**
     * @param array{
     *     NextMarker?: string,
     *     MaxItems?: int,
     *     Quantity?: int,
     *     Items?: list<ConflictingAlias>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
