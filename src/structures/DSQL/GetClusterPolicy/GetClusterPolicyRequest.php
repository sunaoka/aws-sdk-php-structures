<?php

namespace Sunaoka\Aws\Structures\DSQL\GetClusterPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetClusterPolicyRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
