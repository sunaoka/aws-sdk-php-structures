<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionWithTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<OriginGroupMember> $Items
 */
class OriginGroupMembers extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items: list<OriginGroupMember>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
