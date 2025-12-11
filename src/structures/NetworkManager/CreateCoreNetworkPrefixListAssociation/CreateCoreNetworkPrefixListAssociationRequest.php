<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateCoreNetworkPrefixListAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $PrefixListArn
 * @property string $PrefixListAlias
 * @property string|null $ClientToken
 */
class CreateCoreNetworkPrefixListAssociationRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     PrefixListArn: string,
     *     PrefixListAlias: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
