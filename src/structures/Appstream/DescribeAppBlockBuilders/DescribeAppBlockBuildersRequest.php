<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppBlockBuilders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeAppBlockBuildersRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
