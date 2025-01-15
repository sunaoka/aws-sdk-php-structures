<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string|null $Description
 * @property Shapes\Location|null $Location
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSiteRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     Description?: string|null,
     *     Location?: Shapes\Location|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
