<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetOrganizationConfigRuleDetailedStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationConfigRuleName
 * @property Shapes\StatusDetailFilters $Filters
 * @property int $Limit
 * @property string $NextToken
 */
class GetOrganizationConfigRuleDetailedStatusRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConfigRuleName: string,
     *     Filters?: Shapes\StatusDetailFilters,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
