<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property int|null $PolicyVersionId
 * @property 'LIVE'|'LATEST'|null $Alias
 */
class GetCoreNetworkPolicyRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     PolicyVersionId?: int|null,
     *     Alias?: 'LIVE'|'LATEST'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
