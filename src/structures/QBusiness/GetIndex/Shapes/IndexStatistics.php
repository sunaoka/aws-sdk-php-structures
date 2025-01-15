<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextDocumentStatistics|null $textDocumentStatistics
 */
class IndexStatistics extends Shape
{
    /**
     * @param array{textDocumentStatistics?: TextDocumentStatistics|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
