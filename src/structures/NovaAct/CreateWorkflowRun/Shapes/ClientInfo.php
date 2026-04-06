<?php

namespace Sunaoka\Aws\Structures\NovaAct\CreateWorkflowRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $compatibilityVersion
 * @property string|null $sdkVersion
 */
class ClientInfo extends Shape
{
    /**
     * @param array{
     *     compatibilityVersion: int,
     *     sdkVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
