<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteEventTracker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventTrackerArn
 */
class DeleteEventTrackerRequest extends Request
{
    /**
     * @param array{eventTrackerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
