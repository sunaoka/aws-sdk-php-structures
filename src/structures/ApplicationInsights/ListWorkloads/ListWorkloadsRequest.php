<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListWorkloads;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string $ComponentName
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $AccountId
 */
class ListWorkloadsRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     ComponentName: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
