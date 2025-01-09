<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeBatchDeleteConfigurationTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $configurationId
 * @property int $errorStatusCode
 * @property string $errorMessage
 */
class FailedConfiguration extends Shape
{
    /**
     * @param array{
     *     configurationId?: string,
     *     errorStatusCode?: int,
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
