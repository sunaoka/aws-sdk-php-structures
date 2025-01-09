<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListPublicKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NextMarker
 * @property int $MaxItems
 * @property int $Quantity
 * @property list<PublicKeySummary> $Items
 */
class PublicKeyList extends Shape
{
    /**
     * @param array{
     *     NextMarker?: string,
     *     MaxItems: int,
     *     Quantity: int,
     *     Items?: list<PublicKeySummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
