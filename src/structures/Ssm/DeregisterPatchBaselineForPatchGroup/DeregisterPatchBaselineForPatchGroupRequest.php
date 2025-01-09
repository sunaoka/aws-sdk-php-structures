<?php

namespace Sunaoka\Aws\Structures\Ssm\DeregisterPatchBaselineForPatchGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BaselineId
 * @property string $PatchGroup
 */
class DeregisterPatchBaselineForPatchGroupRequest extends Request
{
    /**
     * @param array{
     *     BaselineId: string,
     *     PatchGroup: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
