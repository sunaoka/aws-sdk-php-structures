<?php

namespace Sunaoka\Aws\Structures\NetworkManager\PutCoreNetworkPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $PolicyDocument
 * @property string|null $Description
 * @property int|null $LatestVersionId
 * @property string|null $ClientToken
 */
class PutCoreNetworkPolicyRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     PolicyDocument: string,
     *     Description?: string|null,
     *     LatestVersionId?: int|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
