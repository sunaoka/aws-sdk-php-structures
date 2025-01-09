<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $IndexedTextDocumentsCount
 * @property int<0, max> $IndexedTextBytes
 */
class TextDocumentStatistics extends Shape
{
    /**
     * @param array{
     *     IndexedTextDocumentsCount: int<0, max>,
     *     IndexedTextBytes: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
