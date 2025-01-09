<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\InitializeCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $SignedCert
 * @property string $TrustAnchor
 */
class InitializeClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     SignedCert: string,
     *     TrustAnchor: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
