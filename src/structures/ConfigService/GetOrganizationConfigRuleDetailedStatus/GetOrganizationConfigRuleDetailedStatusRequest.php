<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetOrganizationConfigRuleDetailedStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationConfigRuleName
 * @property Shapes\StatusDetailFilters|null $Filters
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class GetOrganizationConfigRuleDetailedStatusRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConfigRuleName: string,
     *     Filters?: Shapes\StatusDetailFilters|null,
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
