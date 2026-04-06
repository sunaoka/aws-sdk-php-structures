<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\GetResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 */
class GetResourcePolicyRequest extends Request
{
    /**
     * @param array{resourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
