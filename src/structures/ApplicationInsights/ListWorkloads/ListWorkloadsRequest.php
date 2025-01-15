<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListWorkloads;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string $ComponentName
 * @property int<1, 40>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $AccountId
 */
class ListWorkloadsRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     ComponentName: string,
     *     MaxResults?: int<1, 40>|null,
     *     NextToken?: string|null,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
