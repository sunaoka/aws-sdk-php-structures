<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetOrganizationConfigRuleDetailedStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationConfigRuleName
 * @property Shapes\StatusDetailFilters $Filters
 * @property int<0, 100> $Limit
 * @property string $NextToken
 */
class GetOrganizationConfigRuleDetailedStatusRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConfigRuleName: string,
     *     Filters?: Shapes\StatusDetailFilters,
     *     Limit?: int<0, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
