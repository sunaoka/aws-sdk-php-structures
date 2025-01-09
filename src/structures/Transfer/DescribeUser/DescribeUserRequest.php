<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerId
 * @property string $UserName
 */
class DescribeUserRequest extends Request
{
    /**
     * @param array{
     *     ServerId: string,
     *     UserName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
