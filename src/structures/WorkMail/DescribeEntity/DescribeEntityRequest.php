<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $Email
 */
class DescribeEntityRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     Email: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
