<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetComplianceSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $TargetIdFilters
 * @property list<string>|null $RegionFilters
 * @property list<string>|null $ResourceTypeFilters
 * @property list<string>|null $TagKeyFilters
 * @property list<'TARGET_ID'|'REGION'|'RESOURCE_TYPE'>|null $GroupBy
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $PaginationToken
 */
class GetComplianceSummaryRequest extends Request
{
    /**
     * @param array{
     *     TargetIdFilters?: list<string>|null,
     *     RegionFilters?: list<string>|null,
     *     ResourceTypeFilters?: list<string>|null,
     *     TagKeyFilters?: list<string>|null,
     *     GroupBy?: list<'TARGET_ID'|'REGION'|'RESOURCE_TYPE'>|null,
     *     MaxResults?: int<1, 1000>|null,
     *     PaginationToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
