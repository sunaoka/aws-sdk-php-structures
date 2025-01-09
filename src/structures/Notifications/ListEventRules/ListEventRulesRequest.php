<?php

namespace Sunaoka\Aws\Structures\Notifications\ListEventRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $notificationConfigurationArn
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListEventRulesRequest extends Request
{
    /**
     * @param array{
     *     notificationConfigurationArn: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
