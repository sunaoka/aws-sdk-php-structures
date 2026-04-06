<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\CreateDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property string $site
 * @property 'ENABLED'|'DISABLED'|'DECOMMISSIONED'|null $state
 * @property string|null $additionalFixedProperties
 */
class CreateDestinationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     site: string,
     *     state?: 'ENABLED'|'DISABLED'|'DECOMMISSIONED'|null,
     *     additionalFixedProperties?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
