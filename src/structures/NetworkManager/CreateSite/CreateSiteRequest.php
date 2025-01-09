<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $Description
 * @property Shapes\Location $Location
 * @property list<Shapes\Tag> $Tags
 */
class CreateSiteRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     Description?: string,
     *     Location?: Shapes\Location,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
