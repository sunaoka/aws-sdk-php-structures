<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<QueryArgProfile> $Items
 */
class QueryArgProfiles extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<QueryArgProfile>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
