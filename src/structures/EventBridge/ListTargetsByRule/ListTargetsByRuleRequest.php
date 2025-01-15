<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListTargetsByRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Rule
 * @property string|null $EventBusName
 * @property string|null $NextToken
 * @property int<1, 100>|null $Limit
 */
class ListTargetsByRuleRequest extends Request
{
    /**
     * @param array{
     *     Rule: string,
     *     EventBusName?: string|null,
     *     NextToken?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
