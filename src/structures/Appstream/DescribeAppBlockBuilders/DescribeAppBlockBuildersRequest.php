<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppBlockBuilders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Names
 * @property string|null $NextToken
 * @property int|null $MaxResults
 */
class DescribeAppBlockBuildersRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
