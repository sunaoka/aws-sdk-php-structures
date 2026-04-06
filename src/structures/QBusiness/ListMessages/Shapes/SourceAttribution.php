<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $title
 * @property string|null $snippet
 * @property string|null $url
 * @property int|null $citationNumber
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property list<TextSegment>|null $textMessageSegments
 * @property string|null $documentId
 * @property string|null $indexId
 * @property string|null $datasourceId
 */
class SourceAttribution extends Shape
{
    /**
     * @param array{
     *     title?: string|null,
     *     snippet?: string|null,
     *     url?: string|null,
     *     citationNumber?: int|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     textMessageSegments?: list<TextSegment>|null,
     *     documentId?: string|null,
     *     indexId?: string|null,
     *     datasourceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
