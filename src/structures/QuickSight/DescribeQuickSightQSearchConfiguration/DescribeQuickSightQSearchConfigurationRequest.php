<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeQuickSightQSearchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 */
class DescribeQuickSightQSearchConfigurationRequest extends Request
{
    /**
     * @param array{AwsAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
