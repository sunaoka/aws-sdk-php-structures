<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeAuthenticationProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationProfileName
 */
class DescribeAuthenticationProfilesRequest extends Request
{
    /**
     * @param array{AuthenticationProfileName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
