<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccessControlApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ApplicationId
 */
class DescribeAccessControlApplicationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ApplicationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
