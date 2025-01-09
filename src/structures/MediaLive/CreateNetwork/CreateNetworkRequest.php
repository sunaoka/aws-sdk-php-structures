<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\IpPoolCreateRequest> $IpPools
 * @property string $Name
 * @property string $RequestId
 * @property list<Shapes\RouteCreateRequest> $Routes
 * @property array<string, string> $Tags
 */
class CreateNetworkRequest extends Request
{
    /**
     * @param array{
     *     IpPools?: list<Shapes\IpPoolCreateRequest>,
     *     Name?: string,
     *     RequestId?: string,
     *     Routes?: list<Shapes\RouteCreateRequest>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
