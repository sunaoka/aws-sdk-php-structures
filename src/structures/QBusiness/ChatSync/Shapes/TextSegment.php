<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $beginOffset
 * @property int|null $endOffset
 * @property SnippetExcerpt|null $snippetExcerpt
 * @property string|null $mediaId
 * @property string|null $mediaMimeType
 * @property SourceDetails|null $sourceDetails
 */
class TextSegment extends Shape
{
    /**
     * @param array{
     *     beginOffset?: int|null,
     *     endOffset?: int|null,
     *     snippetExcerpt?: SnippetExcerpt|null,
     *     mediaId?: string|null,
     *     mediaMimeType?: string|null,
     *     sourceDetails?: SourceDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
