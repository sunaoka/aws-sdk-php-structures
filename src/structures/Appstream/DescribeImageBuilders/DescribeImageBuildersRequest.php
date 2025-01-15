<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeImageBuilders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Names
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeImageBuildersRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
