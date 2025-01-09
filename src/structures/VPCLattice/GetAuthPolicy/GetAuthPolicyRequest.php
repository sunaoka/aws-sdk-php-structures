<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetAuthPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceIdentifier
 */
class GetAuthPolicyRequest extends Request
{
    /**
     * @param array{resourceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
