<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\ListNotificationRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ListNotificationRulesFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListNotificationRulesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ListNotificationRulesFilter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
