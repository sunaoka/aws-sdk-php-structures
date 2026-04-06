<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $indexedTextBytes
 * @property int<0, max>|null $indexedTextDocumentCount
 */
class TextDocumentStatistics extends Shape
{
    /**
     * @param array{
     *     indexedTextBytes?: int<0, max>|null,
     *     indexedTextDocumentCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
