<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlanKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $usagePlanId
 * @property string|null $position
 * @property int|null $limit
 * @property string|null $nameQuery
 */
class GetUsagePlanKeysRequest extends Request
{
    /**
     * @param array{
     *     usagePlanId: string,
     *     position?: string|null,
     *     limit?: int|null,
     *     nameQuery?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
