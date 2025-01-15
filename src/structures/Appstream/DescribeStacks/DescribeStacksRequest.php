<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeStacks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Names
 * @property string|null $NextToken
 */
class DescribeStacksRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
