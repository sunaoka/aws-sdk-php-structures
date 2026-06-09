<?php

namespace Sunaoka\Aws\Structures\Outposts\ListOrderableInstanceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'GENERATION_2'|'GENERATION_1'|null $OutpostGenerationFilter
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListOrderableInstanceTypesRequest extends Request
{
    /**
     * @param array{
     *     OutpostGenerationFilter?: 'GENERATION_2'|'GENERATION_1'|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
