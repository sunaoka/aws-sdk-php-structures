<?php

namespace Sunaoka\Aws\Structures\Omics\StartAnnotationImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sep
 * @property string|null $encoding
 * @property string|null $quote
 * @property bool|null $quoteAll
 * @property string|null $escape
 * @property bool|null $escapeQuotes
 * @property string|null $comment
 * @property bool|null $header
 * @property string|null $lineSep
 */
class ReadOptions extends Shape
{
    /**
     * @param array{
     *     sep?: string|null,
     *     encoding?: string|null,
     *     quote?: string|null,
     *     quoteAll?: bool|null,
     *     escape?: string|null,
     *     escapeQuotes?: bool|null,
     *     comment?: string|null,
     *     header?: bool|null,
     *     lineSep?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
