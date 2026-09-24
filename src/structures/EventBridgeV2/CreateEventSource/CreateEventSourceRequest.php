<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateEventSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $EventBusArn
 * @property Shapes\EventSourceConfiguration $Configuration
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateEventSourceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EventBusArn: string,
     *     Configuration: Shapes\EventSourceConfiguration,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
