<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\IpPoolUpdateRequest>|null $IpPools
 * @property string|null $Name
 * @property string $NetworkId
 * @property list<Shapes\RouteUpdateRequest>|null $Routes
 */
class UpdateNetworkRequest extends Request
{
    /**
     * @param array{
     *     IpPools?: list<Shapes\IpPoolUpdateRequest>|null,
     *     Name?: string|null,
     *     NetworkId: string,
     *     Routes?: list<Shapes\RouteUpdateRequest>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
