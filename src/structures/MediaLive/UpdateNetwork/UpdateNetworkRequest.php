<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\IpPoolUpdateRequest> $IpPools
 * @property string $Name
 * @property string $NetworkId
 * @property list<Shapes\RouteUpdateRequest> $Routes
 */
class UpdateNetworkRequest extends Request
{
    /**
     * @param array{
     *     IpPools?: list<Shapes\IpPoolUpdateRequest>,
     *     Name?: string,
     *     NetworkId: string,
     *     Routes?: list<Shapes\RouteUpdateRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
