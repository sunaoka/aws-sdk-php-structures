<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppBlocks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Arns
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeAppBlocksRequest extends Request
{
    /**
     * @param array{
     *     Arns?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
