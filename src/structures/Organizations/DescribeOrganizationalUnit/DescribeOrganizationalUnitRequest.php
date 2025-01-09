<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeOrganizationalUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationalUnitId
 */
class DescribeOrganizationalUnitRequest extends Request
{
    /**
     * @param array{OrganizationalUnitId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
