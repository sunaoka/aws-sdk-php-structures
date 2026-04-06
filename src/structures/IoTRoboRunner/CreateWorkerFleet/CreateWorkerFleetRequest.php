<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\CreateWorkerFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property string $site
 * @property string|null $additionalFixedProperties
 */
class CreateWorkerFleetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     site: string,
     *     additionalFixedProperties?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
