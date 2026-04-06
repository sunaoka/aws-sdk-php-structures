<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteCoreNetworkPrefixListAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $PrefixListArn
 */
class DeleteCoreNetworkPrefixListAssociationRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     PrefixListArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
