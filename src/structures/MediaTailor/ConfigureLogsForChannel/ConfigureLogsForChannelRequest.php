<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ConfigureLogsForChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 * @property list<'AS_RUN'> $LogTypes
 */
class ConfigureLogsForChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelName: string,
     *     LogTypes: list<'AS_RUN'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
