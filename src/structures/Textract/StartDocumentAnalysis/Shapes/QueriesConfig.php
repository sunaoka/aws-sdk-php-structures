<?php

namespace Sunaoka\Aws\Structures\Textract\StartDocumentAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Query> $Queries
 */
class QueriesConfig extends Shape
{
    /**
     * @param array{Queries: list<Query>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
