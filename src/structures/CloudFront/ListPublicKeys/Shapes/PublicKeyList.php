<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListPublicKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NextMarker
 * @property int $MaxItems
 * @property int $Quantity
 * @property list<PublicKeySummary>|null $Items
 */
class PublicKeyList extends Shape
{
    /**
     * @param array{
     *     NextMarker?: string|null,
     *     MaxItems: int,
     *     Quantity: int,
     *     Items?: list<PublicKeySummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
