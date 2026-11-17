<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteAgentProfilePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileArn
 */
class DeleteAgentProfilePolicyRequest extends Request
{
    /**
     * @param array{profileArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
