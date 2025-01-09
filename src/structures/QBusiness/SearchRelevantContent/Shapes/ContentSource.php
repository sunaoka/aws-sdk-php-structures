<?php

namespace Sunaoka\Aws\Structures\QBusiness\SearchRelevantContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrieverContentSource $retriever
 */
class ContentSource extends Shape
{
    /**
     * @param array{retriever?: RetrieverContentSource} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
