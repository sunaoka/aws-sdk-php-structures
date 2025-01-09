<?php

namespace Sunaoka\Aws\Structures\ivschat\SendEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roomIdentifier
 * @property string $eventName
 * @property array<string, string> $attributes
 */
class SendEventRequest extends Request
{
    /**
     * @param array{
     *     roomIdentifier: string,
     *     eventName: string,
     *     attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
