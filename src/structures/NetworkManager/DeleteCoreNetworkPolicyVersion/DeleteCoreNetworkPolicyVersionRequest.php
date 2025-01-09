<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteCoreNetworkPolicyVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property int $PolicyVersionId
 */
class DeleteCoreNetworkPolicyVersionRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     PolicyVersionId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
