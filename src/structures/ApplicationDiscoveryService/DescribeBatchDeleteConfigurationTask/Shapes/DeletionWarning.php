<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeBatchDeleteConfigurationTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $configurationId
 * @property int $warningCode
 * @property string $warningText
 */
class DeletionWarning extends Shape
{
    /**
     * @param array{
     *     configurationId?: string,
     *     warningCode?: int,
     *     warningText?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
