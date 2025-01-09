<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiId
 * @property string $stage
 * @property array<string, ThrottleSettings> $throttle
 */
class ApiStage extends Shape
{
    /**
     * @param array{
     *     apiId?: string,
     *     stage?: string,
     *     throttle?: array<string, ThrottleSettings>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
