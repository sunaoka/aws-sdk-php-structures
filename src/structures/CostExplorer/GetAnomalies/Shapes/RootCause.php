<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Service
 * @property string $Region
 * @property string $LinkedAccount
 * @property string $LinkedAccountName
 * @property string $UsageType
 * @property RootCauseImpact $Impact
 */
class RootCause extends Shape
{
    /**
     * @param array{
     *     Service?: string,
     *     Region?: string,
     *     LinkedAccount?: string,
     *     LinkedAccountName?: string,
     *     UsageType?: string,
     *     Impact?: RootCauseImpact
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
