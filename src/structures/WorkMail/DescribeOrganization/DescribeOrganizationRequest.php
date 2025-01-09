<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 */
class DescribeOrganizationRequest extends Request
{
    /**
     * @param array{OrganizationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
