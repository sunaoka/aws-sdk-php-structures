<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListingRevisionInput|null $listing
 */
class GrantedEntityInput extends Shape
{
    /**
     * @param array{listing?: ListingRevisionInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
