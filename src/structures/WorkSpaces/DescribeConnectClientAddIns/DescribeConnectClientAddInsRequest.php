<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectClientAddIns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeConnectClientAddInsRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
