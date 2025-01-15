<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property string|null $Source
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeParametersRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName: string,
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
