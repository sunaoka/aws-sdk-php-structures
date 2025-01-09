<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $usagePlanId
 * @property string $keyId
 * @property string $startDate
 * @property string $endDate
 * @property string $position
 * @property int $limit
 */
class GetUsageRequest extends Request
{
    /**
     * @param array{
     *     usagePlanId: string,
     *     keyId?: string,
     *     startDate: string,
     *     endDate: string,
     *     position?: string,
     *     limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
