<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetManagedThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetManagedThingRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
