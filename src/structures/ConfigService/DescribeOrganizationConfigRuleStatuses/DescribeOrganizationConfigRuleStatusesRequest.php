<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConfigRuleStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $OrganizationConfigRuleNames
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeOrganizationConfigRuleStatusesRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConfigRuleNames?: list<string>,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
