<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeAuthenticationProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationProfileName
 */
class DescribeAuthenticationProfilesRequest extends Request
{
    /**
     * @param array{AuthenticationProfileName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
