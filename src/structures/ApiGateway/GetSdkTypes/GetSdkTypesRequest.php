<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetSdkTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $position
 * @property int $limit
 */
class GetSdkTypesRequest extends Request
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
