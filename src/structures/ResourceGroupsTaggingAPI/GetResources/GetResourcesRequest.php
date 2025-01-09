<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PaginationToken
 * @property list<Shapes\TagFilter> $TagFilters
 * @property int $ResourcesPerPage
 * @property int $TagsPerPage
 * @property list<string> $ResourceTypeFilters
 * @property bool $IncludeComplianceDetails
 * @property bool $ExcludeCompliantResources
 * @property list<string> $ResourceARNList
 */
class GetResourcesRequest extends Request
{
    /**
     * @param array{
     *     PaginationToken?: string,
     *     TagFilters?: list<Shapes\TagFilter>,
     *     ResourcesPerPage?: int,
     *     TagsPerPage?: int,
     *     ResourceTypeFilters?: list<string>,
     *     IncludeComplianceDetails?: bool,
     *     ExcludeCompliantResources?: bool,
     *     ResourceARNList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
