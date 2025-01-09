<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeOrganizationsAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 */
class DescribeOrganizationsAccessRequest extends Request
{
    /**
     * @param array{CallAs?: 'SELF'|'DELEGATED_ADMIN'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
