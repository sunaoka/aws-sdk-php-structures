<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeBatchDeleteConfigurationTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $configurationId
 * @property int|null $warningCode
 * @property string|null $warningText
 */
class DeletionWarning extends Shape
{
    /**
     * @param array{
     *     configurationId?: string|null,
     *     warningCode?: int|null,
     *     warningText?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
