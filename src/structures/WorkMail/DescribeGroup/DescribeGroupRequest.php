<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $GroupId
 */
class DescribeGroupRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     GroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
