<?php

namespace Sunaoka\Aws\Structures\ivschat\SendEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $attributes
 * @property string $eventName
 * @property string $roomIdentifier
 */
class SendEventRequest extends Request
{
    /**
     * @param array{
     *     attributes?: array<string, string>|null,
     *     eventName: string,
     *     roomIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
