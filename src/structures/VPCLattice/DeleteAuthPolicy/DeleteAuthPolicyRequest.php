<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteAuthPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceIdentifier
 */
class DeleteAuthPolicyRequest extends Request
{
    /**
     * @param array{resourceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
