<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AddressConfiguration>|null $Addresses
 * @property array<string, string>|null $Context
 * @property array<string, EndpointSendConfiguration>|null $Endpoints
 * @property DirectMessageConfiguration $MessageConfiguration
 * @property TemplateConfiguration|null $TemplateConfiguration
 * @property string|null $TraceId
 */
class MessageRequest extends Shape
{
    /**
     * @param array{
     *     Addresses?: array<string, AddressConfiguration>|null,
     *     Context?: array<string, string>|null,
     *     Endpoints?: array<string, EndpointSendConfiguration>|null,
     *     MessageConfiguration: DirectMessageConfiguration,
     *     TemplateConfiguration?: TemplateConfiguration|null,
     *     TraceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
