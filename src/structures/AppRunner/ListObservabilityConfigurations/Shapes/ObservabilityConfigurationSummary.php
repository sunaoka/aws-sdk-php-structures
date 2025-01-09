<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListObservabilityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObservabilityConfigurationArn
 * @property string $ObservabilityConfigurationName
 * @property int $ObservabilityConfigurationRevision
 */
class ObservabilityConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     ObservabilityConfigurationArn?: string,
     *     ObservabilityConfigurationName?: string,
     *     ObservabilityConfigurationRevision?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
