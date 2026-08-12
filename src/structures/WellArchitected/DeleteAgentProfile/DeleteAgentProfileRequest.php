<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteAgentProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileArn
 */
class DeleteAgentProfileRequest extends Request
{
    /**
     * @param array{profileArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
