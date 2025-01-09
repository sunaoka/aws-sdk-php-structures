<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $Description
 * @property string $Type
 * @property Shapes\Bandwidth $Bandwidth
 * @property string $Provider
 * @property string $SiteId
 * @property list<Shapes\Tag> $Tags
 */
class CreateLinkRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     Description?: string,
     *     Type?: string,
     *     Bandwidth: Shapes\Bandwidth,
     *     Provider?: string,
     *     SiteId: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
