<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $LinkId
 */
class DeleteLinkRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     LinkId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
