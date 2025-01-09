<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CancelReplay;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplayName
 */
class CancelReplayRequest extends Request
{
    /**
     * @param array{ReplayName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
