<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConformancePackStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $OrganizationConformancePackNames
 * @property int<0, 100> $Limit
 * @property string $NextToken
 */
class DescribeOrganizationConformancePackStatusesRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConformancePackNames?: list<string>,
     *     Limit?: int<0, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
