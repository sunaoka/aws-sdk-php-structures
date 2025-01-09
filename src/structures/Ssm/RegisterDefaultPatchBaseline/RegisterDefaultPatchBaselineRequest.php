<?php

namespace Sunaoka\Aws\Structures\Ssm\RegisterDefaultPatchBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BaselineId
 */
class RegisterDefaultPatchBaselineRequest extends Request
{
    /**
     * @param array{BaselineId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
