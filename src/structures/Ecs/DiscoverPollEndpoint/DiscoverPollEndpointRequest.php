<?php

namespace Sunaoka\Aws\Structures\Ecs\DiscoverPollEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $containerInstance
 * @property string $cluster
 */
class DiscoverPollEndpointRequest extends Request
{
    /**
     * @param array{
     *     containerInstance?: string,
     *     cluster?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
