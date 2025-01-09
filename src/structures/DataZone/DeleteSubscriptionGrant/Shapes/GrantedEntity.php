<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteSubscriptionGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListingRevision $listing
 */
class GrantedEntity extends Shape
{
    /**
     * @param array{listing?: ListingRevision} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
