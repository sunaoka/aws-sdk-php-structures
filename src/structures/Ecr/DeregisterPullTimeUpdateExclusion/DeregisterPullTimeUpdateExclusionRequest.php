<?php

namespace Sunaoka\Aws\Structures\Ecr\DeregisterPullTimeUpdateExclusion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $principalArn
 */
class DeregisterPullTimeUpdateExclusionRequest extends Request
{
    /**
     * @param array{principalArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
