<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConfigRuleStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $OrganizationConfigRuleNames
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class DescribeOrganizationConfigRuleStatusesRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConfigRuleNames?: list<string>|null,
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
