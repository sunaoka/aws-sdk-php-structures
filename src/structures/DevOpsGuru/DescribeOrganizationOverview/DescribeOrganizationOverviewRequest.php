<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationOverview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $FromTime
 * @property \Aws\Api\DateTimeResult $ToTime
 * @property list<string> $AccountIds
 * @property list<string> $OrganizationalUnitIds
 */
class DescribeOrganizationOverviewRequest extends Request
{
    /**
     * @param array{
     *     FromTime: \Aws\Api\DateTimeResult,
     *     ToTime?: \Aws\Api\DateTimeResult,
     *     AccountIds?: list<string>,
     *     OrganizationalUnitIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
