<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListKeyValueStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NextMarker
 * @property int $MaxItems
 * @property int $Quantity
 * @property list<KeyValueStore> $Items
 */
class KeyValueStoreList extends Shape
{
    /**
     * @param array{
     *     NextMarker?: string,
     *     MaxItems: int,
     *     Quantity: int,
     *     Items?: list<KeyValueStore>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
