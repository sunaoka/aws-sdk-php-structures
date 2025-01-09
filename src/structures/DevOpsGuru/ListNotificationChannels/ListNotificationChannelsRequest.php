<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListNotificationChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 */
class ListNotificationChannelsRequest extends Request
{
    /**
     * @param array{NextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
