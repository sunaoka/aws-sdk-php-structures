<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysisSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $Index
 * @property list<int<0, max>>|null $Pages
 */
class SplitDocument extends Shape
{
    /**
     * @param array{
     *     Index?: int<0, max>|null,
     *     Pages?: list<int<0, max>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
