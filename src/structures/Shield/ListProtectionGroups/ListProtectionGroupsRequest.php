<?php

namespace Sunaoka\Aws\Structures\Shield\ListProtectionGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<0, 10000> $MaxResults
 * @property Shapes\InclusionProtectionGroupFilters $InclusionFilters
 */
class ListProtectionGroupsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<0, 10000>,
     *     InclusionFilters?: Shapes\InclusionProtectionGroupFilters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
