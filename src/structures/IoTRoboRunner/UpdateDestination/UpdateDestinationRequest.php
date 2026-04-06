<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\UpdateDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $name
 * @property 'ENABLED'|'DISABLED'|'DECOMMISSIONED'|null $state
 * @property string|null $additionalFixedProperties
 */
class UpdateDestinationRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     state?: 'ENABLED'|'DISABLED'|'DECOMMISSIONED'|null,
     *     additionalFixedProperties?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
