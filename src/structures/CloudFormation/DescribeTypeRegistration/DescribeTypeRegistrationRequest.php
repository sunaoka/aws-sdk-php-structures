<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeTypeRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationToken
 */
class DescribeTypeRegistrationRequest extends Request
{
    /**
     * @param array{RegistrationToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
