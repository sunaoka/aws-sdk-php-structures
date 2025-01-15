<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StartDate
 * @property string|null $EndDate
 */
class AnomalyDateInterval extends Shape
{
    /**
     * @param array{
     *     StartDate: string,
     *     EndDate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
