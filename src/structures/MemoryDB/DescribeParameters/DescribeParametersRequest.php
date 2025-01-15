<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeParametersRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName: string,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
