<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NamePrefix
 * @property string|null $EventBusName
 * @property string|null $NextToken
 * @property int<1, 100>|null $Limit
 */
class ListRulesRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string|null,
     *     EventBusName?: string|null,
     *     NextToken?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
