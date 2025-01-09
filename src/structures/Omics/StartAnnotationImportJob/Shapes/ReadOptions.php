<?php

namespace Sunaoka\Aws\Structures\Omics\StartAnnotationImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sep
 * @property string $encoding
 * @property string $quote
 * @property bool $quoteAll
 * @property string $escape
 * @property bool $escapeQuotes
 * @property string $comment
 * @property bool $header
 * @property string $lineSep
 */
class ReadOptions extends Shape
{
    /**
     * @param array{
     *     sep?: string,
     *     encoding?: string,
     *     quote?: string,
     *     quoteAll?: bool,
     *     escape?: string,
     *     escapeQuotes?: bool,
     *     comment?: string,
     *     header?: bool,
     *     lineSep?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
