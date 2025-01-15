<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectClientAddIns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property string|null $NextToken
 * @property int<1, 25>|null $MaxResults
 */
class DescribeConnectClientAddInsRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
