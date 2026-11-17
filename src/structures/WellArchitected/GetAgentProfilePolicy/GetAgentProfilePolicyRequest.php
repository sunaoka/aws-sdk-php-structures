<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentProfilePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileArn
 */
class GetAgentProfilePolicyRequest extends Request
{
    /**
     * @param array{profileArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
