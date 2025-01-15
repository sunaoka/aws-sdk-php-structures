<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string|null $Description
 * @property string|null $Type
 * @property Shapes\Bandwidth $Bandwidth
 * @property string|null $Provider
 * @property string $SiteId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateLinkRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     Description?: string|null,
     *     Type?: string|null,
     *     Bandwidth: Shapes\Bandwidth,
     *     Provider?: string|null,
     *     SiteId: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
