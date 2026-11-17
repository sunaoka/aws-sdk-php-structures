<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateContextStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateContextStoreRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
