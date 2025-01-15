<?php

namespace Sunaoka\Aws\Structures\Shield\ListProtectionGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<0, 10000>|null $MaxResults
 * @property Shapes\InclusionProtectionGroupFilters|null $InclusionFilters
 */
class ListProtectionGroupsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 10000>|null,
     *     InclusionFilters?: Shapes\InclusionProtectionGroupFilters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
