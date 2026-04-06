<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworkPrefixListAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string|null $PrefixListArn
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCoreNetworkPrefixListAssociationsRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     PrefixListArn?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
