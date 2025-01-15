<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeDefaultParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeDefaultParametersRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
