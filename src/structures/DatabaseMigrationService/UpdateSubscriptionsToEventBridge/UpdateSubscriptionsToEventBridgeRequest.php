<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\UpdateSubscriptionsToEventBridge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $ForceMove
 */
class UpdateSubscriptionsToEventBridgeRequest extends Request
{
    /**
     * @param array{ForceMove?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
