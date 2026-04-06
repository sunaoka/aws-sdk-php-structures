<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pluginId
 * @property array<string, ActionExecutionPayloadField> $payload
 * @property string $payloadFieldNameSeparator
 */
class ActionExecution extends Shape
{
    /**
     * @param array{
     *     pluginId: string,
     *     payload: array<string, ActionExecutionPayloadField>,
     *     payloadFieldNameSeparator: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
