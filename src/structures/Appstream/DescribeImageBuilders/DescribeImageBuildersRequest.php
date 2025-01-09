<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeImageBuilders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeImageBuildersRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
