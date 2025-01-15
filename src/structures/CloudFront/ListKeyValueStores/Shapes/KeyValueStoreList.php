<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListKeyValueStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NextMarker
 * @property int $MaxItems
 * @property int $Quantity
 * @property list<KeyValueStore>|null $Items
 */
class KeyValueStoreList extends Shape
{
    /**
     * @param array{
     *     NextMarker?: string|null,
     *     MaxItems: int,
     *     Quantity: int,
     *     Items?: list<KeyValueStore>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
