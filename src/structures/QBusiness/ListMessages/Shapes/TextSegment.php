<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $beginOffset
 * @property int|null $endOffset
 * @property SnippetExcerpt|null $snippetExcerpt
 */
class TextSegment extends Shape
{
    /**
     * @param array{
     *     beginOffset?: int|null,
     *     endOffset?: int|null,
     *     snippetExcerpt?: SnippetExcerpt|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
