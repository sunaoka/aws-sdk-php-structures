<?php

namespace Sunaoka\Aws\Structures\QConnect\ListSpans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $contentId
 * @property string|null $title
 * @property string|null $knowledgeBaseId
 * @property string|null $knowledgeBaseArn
 */
class SpanCitation extends Shape
{
    /**
     * @param array{
     *     contentId?: string|null,
     *     title?: string|null,
     *     knowledgeBaseId?: string|null,
     *     knowledgeBaseArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
