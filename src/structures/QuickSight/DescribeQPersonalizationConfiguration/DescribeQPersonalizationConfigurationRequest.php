<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeQPersonalizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 */
class DescribeQPersonalizationConfigurationRequest extends Request
{
    /**
     * @param array{AwsAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
