<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FaqStatistics $FaqStatistics
 * @property TextDocumentStatistics $TextDocumentStatistics
 */
class IndexStatistics extends Shape
{
    /**
     * @param array{
     *     FaqStatistics: FaqStatistics,
     *     TextDocumentStatistics: TextDocumentStatistics
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
