<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetRestApis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $position
 * @property int $limit
 */
class GetRestApisRequest extends Request
{
    /**
     * @param array{
     *     position?: string,
     *     limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
