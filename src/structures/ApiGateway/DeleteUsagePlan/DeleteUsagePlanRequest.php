<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteUsagePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $usagePlanId
 */
class DeleteUsagePlanRequest extends Request
{
    /**
     * @param array{usagePlanId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
