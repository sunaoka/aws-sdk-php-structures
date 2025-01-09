<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelReservedInstancesListing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedInstancesListingId
 */
class CancelReservedInstancesListingRequest extends Request
{
    /**
     * @param array{ReservedInstancesListingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
