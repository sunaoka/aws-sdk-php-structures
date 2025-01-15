<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFieldLevelEncryptionConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<QueryArgProfile>|null $Items
 */
class QueryArgProfiles extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<QueryArgProfile>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
