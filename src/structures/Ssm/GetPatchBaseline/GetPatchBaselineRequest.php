<?php

namespace Sunaoka\Aws\Structures\Ssm\GetPatchBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BaselineId
 */
class GetPatchBaselineRequest extends Request
{
    /**
     * @param array{BaselineId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
