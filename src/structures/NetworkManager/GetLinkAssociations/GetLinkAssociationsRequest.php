<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetLinkAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $DeviceId
 * @property string $LinkId
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class GetLinkAssociationsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     DeviceId?: string,
     *     LinkId?: string,
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
