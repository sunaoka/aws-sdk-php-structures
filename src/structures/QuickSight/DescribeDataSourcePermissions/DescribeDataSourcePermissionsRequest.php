<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSourcePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DataSourceId
 */
class DescribeDataSourcePermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DataSourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
