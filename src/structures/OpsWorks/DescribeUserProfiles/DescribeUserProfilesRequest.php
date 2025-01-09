<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeUserProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $IamUserArns
 */
class DescribeUserProfilesRequest extends Request
{
    /**
     * @param array{IamUserArns?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
