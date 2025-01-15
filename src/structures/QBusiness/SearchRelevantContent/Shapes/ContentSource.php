<?php

namespace Sunaoka\Aws\Structures\QBusiness\SearchRelevantContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrieverContentSource|null $retriever
 */
class ContentSource extends Shape
{
    /**
     * @param array{retriever?: RetrieverContentSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
