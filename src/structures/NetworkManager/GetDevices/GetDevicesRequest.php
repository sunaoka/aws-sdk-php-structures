<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string>|null $DeviceIds
 * @property string|null $SiteId
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class GetDevicesRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     DeviceIds?: list<string>|null,
     *     SiteId?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
