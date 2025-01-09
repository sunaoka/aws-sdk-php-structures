<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Context
 * @property DirectMessageConfiguration $MessageConfiguration
 * @property TemplateConfiguration $TemplateConfiguration
 * @property string $TraceId
 * @property array<string, EndpointSendConfiguration> $Users
 */
class SendUsersMessageRequest extends Shape
{
    /**
     * @param array{
     *     Context?: array<string, string>,
     *     MessageConfiguration: DirectMessageConfiguration,
     *     TemplateConfiguration?: TemplateConfiguration,
     *     TraceId?: string,
     *     Users: array<string, EndpointSendConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
