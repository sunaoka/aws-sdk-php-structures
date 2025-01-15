<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateCoreNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $PolicyDocument
 * @property string|null $ClientToken
 */
class CreateCoreNetworkRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     PolicyDocument?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
