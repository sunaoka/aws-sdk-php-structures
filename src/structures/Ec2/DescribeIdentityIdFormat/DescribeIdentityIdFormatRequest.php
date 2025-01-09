<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIdentityIdFormat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Resource
 * @property string $PrincipalArn
 */
class DescribeIdentityIdFormatRequest extends Request
{
    /**
     * @param array{
     *     Resource?: string,
     *     PrincipalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
