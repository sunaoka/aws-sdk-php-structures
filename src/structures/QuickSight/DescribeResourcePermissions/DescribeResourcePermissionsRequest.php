<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeResourcePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 */
class DescribeResourcePermissionsRequest extends Request
{
    /**
     * @param array{AwsAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
