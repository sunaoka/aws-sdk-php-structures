<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $account
 * @property int|null $numberOfActiveFindings
 * @property array<string, int>|null $details
 */
class FindingAggregationAccountDetails extends Shape
{
    /**
     * @param array{
     *     account?: string|null,
     *     numberOfActiveFindings?: int|null,
     *     details?: array<string, int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
