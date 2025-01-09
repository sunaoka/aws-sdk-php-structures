<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextDocumentStatistics $textDocumentStatistics
 */
class IndexStatistics extends Shape
{
    /**
     * @param array{textDocumentStatistics?: TextDocumentStatistics} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
