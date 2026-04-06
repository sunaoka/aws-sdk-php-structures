<?php

namespace Sunaoka\Aws\Structures\Ecr\RegisterPullTimeUpdateExclusion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $principalArn
 */
class RegisterPullTimeUpdateExclusionRequest extends Request
{
    /**
     * @param array{principalArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
