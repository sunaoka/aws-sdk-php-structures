<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ObservabilityEnabled
 * @property string|null $ObservabilityConfigurationArn
 */
class ServiceObservabilityConfiguration extends Shape
{
    /**
     * @param array{
     *     ObservabilityEnabled: bool,
     *     ObservabilityConfigurationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
