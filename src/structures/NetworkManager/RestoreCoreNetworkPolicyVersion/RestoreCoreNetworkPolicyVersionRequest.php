<?php

namespace Sunaoka\Aws\Structures\NetworkManager\RestoreCoreNetworkPolicyVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property int $PolicyVersionId
 */
class RestoreCoreNetworkPolicyVersionRequest extends Request
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
