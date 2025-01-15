<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListObservabilityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ObservabilityConfigurationArn
 * @property string|null $ObservabilityConfigurationName
 * @property int|null $ObservabilityConfigurationRevision
 */
class ObservabilityConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     ObservabilityConfigurationArn?: string|null,
     *     ObservabilityConfigurationName?: string|null,
     *     ObservabilityConfigurationRevision?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
