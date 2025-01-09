<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceUserArn
 */
class DescribeAppInstanceUserRequest extends Request
{
    /**
     * @param array{AppInstanceUserArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
