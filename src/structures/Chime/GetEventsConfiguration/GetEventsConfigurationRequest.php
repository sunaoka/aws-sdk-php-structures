<?php

namespace Sunaoka\Aws\Structures\Chime\GetEventsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BotId
 */
class GetEventsConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BotId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
