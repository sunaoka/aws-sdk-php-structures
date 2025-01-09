<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $destinationName
 */
class DeleteDestinationRequest extends Request
{
    /**
     * @param array{destinationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
