<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $beginOffset
 * @property int|null $endOffset
 * @property SnippetExcerpt|null $snippetExcerpt
 * @property string|null $mediaId
 * @property string|null $mediaMimeType
 */
class TextSegment extends Shape
{
    /**
     * @param array{
     *     beginOffset?: int|null,
     *     endOffset?: int|null,
     *     snippetExcerpt?: SnippetExcerpt|null,
     *     mediaId?: string|null,
     *     mediaMimeType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
