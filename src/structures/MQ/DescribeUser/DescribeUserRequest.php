<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BrokerId
 * @property string $Username
 */
class DescribeUserRequest extends Request
{
    /**
     * @param array{
     *     BrokerId: string,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
