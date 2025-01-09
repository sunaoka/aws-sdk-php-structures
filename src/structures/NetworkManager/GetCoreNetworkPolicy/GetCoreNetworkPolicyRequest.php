<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property int $PolicyVersionId
 * @property 'LIVE'|'LATEST' $Alias
 */
class GetCoreNetworkPolicyRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     PolicyVersionId?: int,
     *     Alias?: 'LIVE'|'LATEST'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
