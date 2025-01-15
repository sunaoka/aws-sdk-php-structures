<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\IpPoolCreateRequest>|null $IpPools
 * @property string|null $Name
 * @property string|null $RequestId
 * @property list<Shapes\RouteCreateRequest>|null $Routes
 * @property array<string, string>|null $Tags
 */
class CreateNetworkRequest extends Request
{
    /**
     * @param array{
     *     IpPools?: list<Shapes\IpPoolCreateRequest>|null,
     *     Name?: string|null,
     *     RequestId?: string|null,
     *     Routes?: list<Shapes\RouteCreateRequest>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
