<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeMultiRegionParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiRegionParameterGroupName
 * @property string|null $Source
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeMultiRegionParametersRequest extends Request
{
    /**
     * @param array{
     *     MultiRegionParameterGroupName: string,
     *     Source?: string|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
