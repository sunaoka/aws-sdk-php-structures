<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $usagePlanId
 */
class GetUsagePlanRequest extends Request
{
    /**
     * @param array{usagePlanId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
