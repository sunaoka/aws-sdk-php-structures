<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Attributes
 * @property SavingsPlansCoverageData $Coverage
 * @property DateInterval $TimePeriod
 */
class SavingsPlansCoverage extends Shape
{
    /**
     * @param array{
     *     Attributes?: array<string, string>,
     *     Coverage?: SavingsPlansCoverageData,
     *     TimePeriod?: DateInterval
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
