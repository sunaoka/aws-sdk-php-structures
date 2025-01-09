<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property string $Source
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeParametersRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName: string,
     *     Source?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
