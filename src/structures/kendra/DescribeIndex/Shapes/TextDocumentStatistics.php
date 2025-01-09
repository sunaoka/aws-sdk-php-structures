<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $IndexedTextDocumentsCount
 * @property int $IndexedTextBytes
 */
class TextDocumentStatistics extends Shape
{
    /**
     * @param array{
     *     IndexedTextDocumentsCount: int,
     *     IndexedTextBytes: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
