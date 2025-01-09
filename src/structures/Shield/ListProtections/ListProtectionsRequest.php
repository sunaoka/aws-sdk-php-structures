<?php

namespace Sunaoka\Aws\Structures\Shield\ListProtections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<0, 10000> $MaxResults
 * @property Shapes\InclusionProtectionFilters $InclusionFilters
 */
class ListProtectionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<0, 10000>,
     *     InclusionFilters?: Shapes\InclusionProtectionFilters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
