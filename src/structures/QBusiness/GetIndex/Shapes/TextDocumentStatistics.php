<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $indexedTextBytes
 * @property int $indexedTextDocumentCount
 */
class TextDocumentStatistics extends Shape
{
    /**
     * @param array{
     *     indexedTextBytes?: int,
     *     indexedTextDocumentCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
