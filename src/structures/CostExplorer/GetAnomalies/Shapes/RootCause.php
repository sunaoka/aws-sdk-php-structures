<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Service
 * @property string|null $Region
 * @property string|null $LinkedAccount
 * @property string|null $UsageType
 * @property string|null $LinkedAccountName
 */
class RootCause extends Shape
{
    /**
     * @param array{
     *     Service?: string|null,
     *     Region?: string|null,
     *     LinkedAccount?: string|null,
     *     UsageType?: string|null,
     *     LinkedAccountName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
