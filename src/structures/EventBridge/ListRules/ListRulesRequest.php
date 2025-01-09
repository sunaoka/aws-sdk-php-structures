<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamePrefix
 * @property string $EventBusName
 * @property string $NextToken
 * @property int $Limit
 */
class ListRulesRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string,
     *     EventBusName?: string,
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
