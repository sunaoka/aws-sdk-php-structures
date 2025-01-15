<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\ListNotificationRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ListNotificationRulesFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListNotificationRulesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ListNotificationRulesFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
