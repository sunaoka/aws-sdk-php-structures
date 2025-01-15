<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListOrganizationInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListInsightsStatusFilter $StatusFilter
 * @property int<1, 100>|null $MaxResults
 * @property list<string>|null $AccountIds
 * @property list<string>|null $OrganizationalUnitIds
 * @property string|null $NextToken
 */
class ListOrganizationInsightsRequest extends Request
{
    /**
     * @param array{
     *     StatusFilter: Shapes\ListInsightsStatusFilter,
     *     MaxResults?: int<1, 100>|null,
     *     AccountIds?: list<string>|null,
     *     OrganizationalUnitIds?: list<string>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
