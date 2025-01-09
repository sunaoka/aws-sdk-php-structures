<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListTargetsByRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Rule
 * @property string $EventBusName
 * @property string $NextToken
 * @property int $Limit
 */
class ListTargetsByRuleRequest extends Request
{
    /**
     * @param array{
     *     Rule: string,
     *     EventBusName?: string,
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
