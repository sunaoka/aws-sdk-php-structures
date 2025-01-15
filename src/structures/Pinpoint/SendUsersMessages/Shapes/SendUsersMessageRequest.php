<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Context
 * @property DirectMessageConfiguration $MessageConfiguration
 * @property TemplateConfiguration|null $TemplateConfiguration
 * @property string|null $TraceId
 * @property array<string, EndpointSendConfiguration> $Users
 */
class SendUsersMessageRequest extends Shape
{
    /**
     * @param array{
     *     Context?: array<string, string>|null,
     *     MessageConfiguration: DirectMessageConfiguration,
     *     TemplateConfiguration?: TemplateConfiguration|null,
     *     TraceId?: string|null,
     *     Users: array<string, EndpointSendConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
