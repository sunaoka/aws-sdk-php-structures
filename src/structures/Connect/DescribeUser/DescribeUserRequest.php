<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserId
 * @property string $InstanceId
 */
class DescribeUserRequest extends Request
{
    /**
     * @param array{
     *     UserId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
