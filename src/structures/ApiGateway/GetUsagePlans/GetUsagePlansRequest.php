<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $position
 * @property string|null $keyId
 * @property int|null $limit
 */
class GetUsagePlansRequest extends Request
{
    /**
     * @param array{
     *     position?: string|null,
     *     keyId?: string|null,
     *     limit?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
