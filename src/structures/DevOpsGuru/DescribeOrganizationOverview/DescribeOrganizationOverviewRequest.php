<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationOverview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $FromTime
 * @property \Aws\Api\DateTimeResult|null $ToTime
 * @property list<string>|null $AccountIds
 * @property list<string>|null $OrganizationalUnitIds
 */
class DescribeOrganizationOverviewRequest extends Request
{
    /**
     * @param array{
     *     FromTime: \Aws\Api\DateTimeResult,
     *     ToTime?: \Aws\Api\DateTimeResult|null,
     *     AccountIds?: list<string>|null,
     *     OrganizationalUnitIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
