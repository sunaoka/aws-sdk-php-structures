<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $PaginationToken
 * @property list<Shapes\TagFilter>|null $TagFilters
 * @property int|null $ResourcesPerPage
 * @property int|null $TagsPerPage
 * @property list<string>|null $ResourceTypeFilters
 * @property bool|null $IncludeComplianceDetails
 * @property bool|null $ExcludeCompliantResources
 * @property list<string>|null $ResourceARNList
 */
class GetResourcesRequest extends Request
{
    /**
     * @param array{
     *     PaginationToken?: string|null,
     *     TagFilters?: list<Shapes\TagFilter>|null,
     *     ResourcesPerPage?: int|null,
     *     TagsPerPage?: int|null,
     *     ResourceTypeFilters?: list<string>|null,
     *     IncludeComplianceDetails?: bool|null,
     *     ExcludeCompliantResources?: bool|null,
     *     ResourceARNList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
