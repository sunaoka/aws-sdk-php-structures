<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<KeyValueStoreAssociation> $Items
 */
class KeyValueStoreAssociations extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<KeyValueStoreAssociation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
