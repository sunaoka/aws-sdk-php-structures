<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $position
 * @property string $keyId
 * @property int $limit
 */
class GetUsagePlansRequest extends Request
{
    /**
     * @param array{
     *     position?: string,
     *     keyId?: string,
     *     limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
