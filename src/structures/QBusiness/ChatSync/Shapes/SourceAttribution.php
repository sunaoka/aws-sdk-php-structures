<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $snippet
 * @property string $url
 * @property int $citationNumber
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<TextSegment> $textMessageSegments
 */
class SourceAttribution extends Shape
{
    /**
     * @param array{
     *     title?: string,
     *     snippet?: string,
     *     url?: string,
     *     citationNumber?: int,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     textMessageSegments?: list<TextSegment>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
