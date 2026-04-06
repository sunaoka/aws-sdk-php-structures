<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIdentityIdFormat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PrincipalArn
 * @property string|null $Resource
 */
class DescribeIdentityIdFormatRequest extends Request
{
    /**
     * @param array{
     *     PrincipalArn: string,
     *     Resource?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
