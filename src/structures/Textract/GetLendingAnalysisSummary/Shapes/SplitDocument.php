<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysisSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Index
 * @property list<int> $Pages
 */
class SplitDocument extends Shape
{
    /**
     * @param array{
     *     Index?: int,
     *     Pages?: list<int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
