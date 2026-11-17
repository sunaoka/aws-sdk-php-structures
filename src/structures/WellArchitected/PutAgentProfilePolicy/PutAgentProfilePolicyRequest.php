<?php

namespace Sunaoka\Aws\Structures\WellArchitected\PutAgentProfilePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileArn
 * @property string $policy
 */
class PutAgentProfilePolicyRequest extends Request
{
    /**
     * @param array{
     *     profileArn: string,
     *     policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
