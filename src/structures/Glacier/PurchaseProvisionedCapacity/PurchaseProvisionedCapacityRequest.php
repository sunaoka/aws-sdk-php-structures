<?php

namespace Sunaoka\Aws\Structures\Glacier\PurchaseProvisionedCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 */
class PurchaseProvisionedCapacityRequest extends Request
{
    /**
     * @param array{accountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
