<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIdentityIdFormat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Resource
 * @property string $PrincipalArn
 */
class DescribeIdentityIdFormatRequest extends Request
{
    /**
     * @param array{
     *     Resource?: string|null,
     *     PrincipalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
