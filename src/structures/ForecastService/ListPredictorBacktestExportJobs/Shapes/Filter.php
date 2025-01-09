<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListPredictorBacktestExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 * @property 'IS'|'IS_NOT' $Condition
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Value: string,
     *     Condition: 'IS'|'IS_NOT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
