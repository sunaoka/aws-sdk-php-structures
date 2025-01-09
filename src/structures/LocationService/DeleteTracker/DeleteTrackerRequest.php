<?php

namespace Sunaoka\Aws\Structures\LocationService\DeleteTracker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 */
class DeleteTrackerRequest extends Request
{
    /**
     * @param array{TrackerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
