<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDefaultQBusinessApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string|null $Namespace
 */
class DescribeDefaultQBusinessApplicationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
