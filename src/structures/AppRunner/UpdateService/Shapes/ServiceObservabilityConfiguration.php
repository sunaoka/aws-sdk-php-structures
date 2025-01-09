<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ObservabilityEnabled
 * @property string $ObservabilityConfigurationArn
 */
class ServiceObservabilityConfiguration extends Shape
{
    /**
     * @param array{
     *     ObservabilityEnabled: bool,
     *     ObservabilityConfigurationArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
