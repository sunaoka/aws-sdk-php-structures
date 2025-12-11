<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnectorPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ActionConnectorId
 */
class DescribeActionConnectorPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ActionConnectorId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
