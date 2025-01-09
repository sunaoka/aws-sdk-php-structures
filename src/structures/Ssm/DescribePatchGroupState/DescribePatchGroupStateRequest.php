<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchGroupState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PatchGroup
 */
class DescribePatchGroupStateRequest extends Request
{
    /**
     * @param array{PatchGroup: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
