<?php

namespace Sunaoka\Aws\Structures\Shield\ListProtections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<0, 10000>|null $MaxResults
 * @property Shapes\InclusionProtectionFilters|null $InclusionFilters
 */
class ListProtectionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 10000>|null,
     *     InclusionFilters?: Shapes\InclusionProtectionFilters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
