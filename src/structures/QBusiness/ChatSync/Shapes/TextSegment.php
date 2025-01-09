<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $beginOffset
 * @property int $endOffset
 * @property SnippetExcerpt $snippetExcerpt
 * @property string $mediaId
 * @property string $mediaMimeType
 */
class TextSegment extends Shape
{
    /**
     * @param array{
     *     beginOffset?: int,
     *     endOffset?: int,
     *     snippetExcerpt?: SnippetExcerpt,
     *     mediaId?: string,
     *     mediaMimeType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
