<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AssociateLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $DeviceId
 * @property string $LinkId
 */
class AssociateLinkRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     DeviceId: string,
     *     LinkId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
