<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetLinkAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string|null $DeviceId
 * @property string|null $LinkId
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class GetLinkAssociationsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     DeviceId?: string|null,
     *     LinkId?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
