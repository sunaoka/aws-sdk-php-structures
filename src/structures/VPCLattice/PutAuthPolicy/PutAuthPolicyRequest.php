<?php

namespace Sunaoka\Aws\Structures\VPCLattice\PutAuthPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceIdentifier
 * @property string $policy
 */
class PutAuthPolicyRequest extends Request
{
    /**
     * @param array{
     *     resourceIdentifier: string,
     *     policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
