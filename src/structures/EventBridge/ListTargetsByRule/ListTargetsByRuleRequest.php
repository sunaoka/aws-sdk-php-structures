<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListTargetsByRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Rule
 * @property string $EventBusName
 * @property string $NextToken
 * @property int<1, 100> $Limit
 */
class ListTargetsByRuleRequest extends Request
{
    /**
     * @param array{
     *     Rule: string,
     *     EventBusName?: string,
     *     NextToken?: string,
     *     Limit?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
