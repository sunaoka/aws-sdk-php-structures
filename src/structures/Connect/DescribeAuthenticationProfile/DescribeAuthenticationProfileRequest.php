<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeAuthenticationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationProfileId
 * @property string $InstanceId
 */
class DescribeAuthenticationProfileRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationProfileId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
