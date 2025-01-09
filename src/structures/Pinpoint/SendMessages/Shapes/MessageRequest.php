<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AddressConfiguration> $Addresses
 * @property array<string, string> $Context
 * @property array<string, EndpointSendConfiguration> $Endpoints
 * @property DirectMessageConfiguration $MessageConfiguration
 * @property TemplateConfiguration $TemplateConfiguration
 * @property string $TraceId
 */
class MessageRequest extends Shape
{
    /**
     * @param array{
     *     Addresses?: array<string, AddressConfiguration>,
     *     Context?: array<string, string>,
     *     Endpoints?: array<string, EndpointSendConfiguration>,
     *     MessageConfiguration: DirectMessageConfiguration,
     *     TemplateConfiguration?: TemplateConfiguration,
     *     TraceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
