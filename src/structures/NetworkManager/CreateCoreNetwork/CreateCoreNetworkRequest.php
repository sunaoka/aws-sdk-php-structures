<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateCoreNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 * @property string $PolicyDocument
 * @property string $ClientToken
 */
class CreateCoreNetworkRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>,
     *     PolicyDocument?: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
