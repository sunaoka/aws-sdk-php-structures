<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppLicenseUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BillingPeriod
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeAppLicenseUsageRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod: string,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
