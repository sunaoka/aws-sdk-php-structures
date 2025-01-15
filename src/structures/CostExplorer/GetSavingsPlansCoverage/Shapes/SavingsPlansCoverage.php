<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Attributes
 * @property SavingsPlansCoverageData|null $Coverage
 * @property DateInterval|null $TimePeriod
 */
class SavingsPlansCoverage extends Shape
{
    /**
     * @param array{
     *     Attributes?: array<string, string>|null,
     *     Coverage?: SavingsPlansCoverageData|null,
     *     TimePeriod?: DateInterval|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
