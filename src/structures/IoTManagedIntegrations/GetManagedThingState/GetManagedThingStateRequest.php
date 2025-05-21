<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetManagedThingState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ManagedThingId
 */
class GetManagedThingStateRequest extends Request
{
    /**
     * @param array{ManagedThingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
