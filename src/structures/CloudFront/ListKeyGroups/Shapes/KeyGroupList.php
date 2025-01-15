<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListKeyGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NextMarker
 * @property int $MaxItems
 * @property int $Quantity
 * @property list<KeyGroupSummary>|null $Items
 */
class KeyGroupList extends Shape
{
    /**
     * @param array{
     *     NextMarker?: string|null,
     *     MaxItems: int,
     *     Quantity: int,
     *     Items?: list<KeyGroupSummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
