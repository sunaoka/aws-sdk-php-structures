<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetComplianceSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TargetIdFilters
 * @property list<string> $RegionFilters
 * @property list<string> $ResourceTypeFilters
 * @property list<string> $TagKeyFilters
 * @property list<'TARGET_ID'|'REGION'|'RESOURCE_TYPE'> $GroupBy
 * @property int $MaxResults
 * @property string $PaginationToken
 */
class GetComplianceSummaryRequest extends Request
{
    /**
     * @param array{
     *     TargetIdFilters?: list<string>,
     *     RegionFilters?: list<string>,
     *     ResourceTypeFilters?: list<string>,
     *     TagKeyFilters?: list<string>,
     *     GroupBy?: list<'TARGET_ID'|'REGION'|'RESOURCE_TYPE'>,
     *     MaxResults?: int,
     *     PaginationToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
