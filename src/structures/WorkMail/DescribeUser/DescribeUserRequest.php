<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $UserId
 */
class DescribeUserRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     UserId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
