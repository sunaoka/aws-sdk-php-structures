<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeBatchDeleteConfigurationTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $configurationId
 * @property int|null $errorStatusCode
 * @property string|null $errorMessage
 */
class FailedConfiguration extends Shape
{
    /**
     * @param array{
     *     configurationId?: string|null,
     *     errorStatusCode?: int|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
