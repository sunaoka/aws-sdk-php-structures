<?php

namespace Sunaoka\Aws\Structures\Glacier\ListProvisionedCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 */
class ListProvisionedCapacityRequest extends Request
{
    /**
     * @param array{accountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
