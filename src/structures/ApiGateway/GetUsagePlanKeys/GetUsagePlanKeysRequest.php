<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlanKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $usagePlanId
 * @property string $position
 * @property int $limit
 * @property string $nameQuery
 */
class GetUsagePlanKeysRequest extends Request
{
    /**
     * @param array{
     *     usagePlanId: string,
     *     position?: string,
     *     limit?: int,
     *     nameQuery?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
