<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string> $DeviceIds
 * @property string $SiteId
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetDevicesRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     DeviceIds?: list<string>,
     *     SiteId?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
