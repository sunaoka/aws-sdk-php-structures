<?php

namespace Sunaoka\Aws\Structures\Synthetics\ListAssociatedGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 20> $MaxResults
 * @property string $ResourceArn
 */
class ListAssociatedGroupsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 20>,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
