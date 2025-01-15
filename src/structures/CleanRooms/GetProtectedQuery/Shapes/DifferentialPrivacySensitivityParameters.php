<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AVG'|'COUNT'|'COUNT_DISTINCT'|'SUM'|'STDDEV' $aggregationType
 * @property string $aggregationExpression
 * @property int<0, max> $userContributionLimit
 * @property float|null $minColumnValue
 * @property float|null $maxColumnValue
 */
class DifferentialPrivacySensitivityParameters extends Shape
{
    /**
     * @param array{
     *     aggregationType: 'AVG'|'COUNT'|'COUNT_DISTINCT'|'SUM'|'STDDEV',
     *     aggregationExpression: string,
     *     userContributionLimit: int<0, max>,
     *     minColumnValue?: float|null,
     *     maxColumnValue?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
