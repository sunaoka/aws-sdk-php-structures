<?php

namespace Sunaoka\Aws\Structures\Notifications\CreateEventRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $notificationConfigurationArn
 * @property string $source
 * @property string $eventType
 * @property string $eventPattern
 * @property list<string> $regions
 */
class CreateEventRuleRequest extends Request
{
    /**
     * @param array{
     *     notificationConfigurationArn: string,
     *     source: string,
     *     eventType: string,
     *     eventPattern?: string,
     *     regions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
