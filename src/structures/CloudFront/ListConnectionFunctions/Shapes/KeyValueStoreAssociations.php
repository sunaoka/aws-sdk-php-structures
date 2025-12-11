<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListConnectionFunctions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<KeyValueStoreAssociation>|null $Items
 */
class KeyValueStoreAssociations extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<KeyValueStoreAssociation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
