<?php

namespace Sunaoka\Aws\Structures\Ecs\DiscoverPollEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $containerInstance
 * @property string|null $cluster
 */
class DiscoverPollEndpointRequest extends Request
{
    /**
     * @param array{
     *     containerInstance?: string|null,
     *     cluster?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
