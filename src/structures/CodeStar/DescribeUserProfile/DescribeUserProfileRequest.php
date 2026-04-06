<?php

namespace Sunaoka\Aws\Structures\CodeStar\DescribeUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userArn
 */
class DescribeUserProfileRequest extends Request
{
    /**
     * @param array{userArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
