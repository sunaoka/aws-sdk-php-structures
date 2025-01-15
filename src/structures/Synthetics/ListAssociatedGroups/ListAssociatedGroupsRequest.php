<?php

namespace Sunaoka\Aws\Structures\Synthetics\ListAssociatedGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 * @property string $ResourceArn
 */
class ListAssociatedGroupsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
