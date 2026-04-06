<?php

namespace Sunaoka\Aws\Structures\VPCLattice\PutAuthPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policy
 * @property string $resourceIdentifier
 */
class PutAuthPolicyRequest extends Request
{
    /**
     * @param array{
     *     policy: string,
     *     resourceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
