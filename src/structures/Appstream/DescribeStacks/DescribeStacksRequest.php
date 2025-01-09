<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeStacks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 * @property string $NextToken
 */
class DescribeStacksRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
