<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $LinkId
 * @property string $Description
 * @property string $Type
 * @property Shapes\Bandwidth $Bandwidth
 * @property string $Provider
 */
class UpdateLinkRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     LinkId: string,
     *     Description?: string,
     *     Type?: string,
     *     Bandwidth?: Shapes\Bandwidth,
     *     Provider?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
