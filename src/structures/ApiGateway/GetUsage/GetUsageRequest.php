<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $usagePlanId
 * @property string|null $keyId
 * @property string $startDate
 * @property string $endDate
 * @property string|null $position
 * @property int|null $limit
 */
class GetUsageRequest extends Request
{
    /**
     * @param array{
     *     usagePlanId: string,
     *     keyId?: string|null,
     *     startDate: string,
     *     endDate: string,
     *     position?: string|null,
     *     limit?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
