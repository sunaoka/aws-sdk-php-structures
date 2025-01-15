<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateUsagePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $apiId
 * @property string|null $stage
 * @property array<string, ThrottleSettings>|null $throttle
 */
class ApiStage extends Shape
{
    /**
     * @param array{
     *     apiId?: string|null,
     *     stage?: string|null,
     *     throttle?: array<string, ThrottleSettings>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
