<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConformancePacks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $OrganizationConformancePackNames
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeOrganizationConformancePacksRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConformancePackNames?: list<string>,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
