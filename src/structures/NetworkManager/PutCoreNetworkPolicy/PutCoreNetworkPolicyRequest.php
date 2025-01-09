<?php

namespace Sunaoka\Aws\Structures\NetworkManager\PutCoreNetworkPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $PolicyDocument
 * @property string $Description
 * @property int $LatestVersionId
 * @property string $ClientToken
 */
class PutCoreNetworkPolicyRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     PolicyDocument: string,
     *     Description?: string,
     *     LatestVersionId?: int,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
