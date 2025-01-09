<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property int<1, 40> $MaxResults
 * @property string $NextToken
 * @property string $AccountId
 */
class ListComponentsRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     MaxResults?: int<1, 40>,
     *     NextToken?: string,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
