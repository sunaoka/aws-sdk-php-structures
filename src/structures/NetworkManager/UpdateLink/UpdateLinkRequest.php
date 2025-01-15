<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $LinkId
 * @property string|null $Description
 * @property string|null $Type
 * @property Shapes\Bandwidth|null $Bandwidth
 * @property string|null $Provider
 */
class UpdateLinkRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     LinkId: string,
     *     Description?: string|null,
     *     Type?: string|null,
     *     Bandwidth?: Shapes\Bandwidth|null,
     *     Provider?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
