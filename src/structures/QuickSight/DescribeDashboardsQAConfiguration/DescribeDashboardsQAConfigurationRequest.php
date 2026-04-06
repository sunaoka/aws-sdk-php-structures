<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardsQAConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 */
class DescribeDashboardsQAConfigurationRequest extends Request
{
    /**
     * @param array{AwsAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
