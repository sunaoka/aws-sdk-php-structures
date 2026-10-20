<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGatewayResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gateway
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeGatewayResourcesRequest extends Request
{
    /**
     * @param array{
     *     gateway: string,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
