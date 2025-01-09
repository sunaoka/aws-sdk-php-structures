<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListOrganizationInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListInsightsStatusFilter $StatusFilter
 * @property int $MaxResults
 * @property list<string> $AccountIds
 * @property list<string> $OrganizationalUnitIds
 * @property string $NextToken
 */
class ListOrganizationInsightsRequest extends Request
{
    /**
     * @param array{
     *     StatusFilter: Shapes\ListInsightsStatusFilter,
     *     MaxResults?: int,
     *     AccountIds?: list<string>,
     *     OrganizationalUnitIds?: list<string>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
