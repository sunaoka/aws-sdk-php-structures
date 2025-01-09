<?php

namespace Sunaoka\Aws\Structures\Notifications\ListEventRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $notificationConfigurationArn
 * @property int $maxResults
 * @property string $nextToken
 */
class ListEventRulesRequest extends Request
{
    /**
     * @param array{
     *     notificationConfigurationArn: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
