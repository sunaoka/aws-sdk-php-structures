<?php

namespace Sunaoka\Aws\Structures\Ssm\DeletePatchBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BaselineId
 */
class DeletePatchBaselineRequest extends Request
{
    /**
     * @param array{BaselineId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
