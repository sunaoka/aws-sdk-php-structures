<?php

namespace Sunaoka\Aws\Structures\QBusiness\SearchRelevantContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $content
 * @property string|null $documentId
 * @property string|null $documentTitle
 * @property string|null $documentUri
 * @property list<DocumentAttribute>|null $documentAttributes
 * @property ScoreAttributes|null $scoreAttributes
 */
class RelevantContent extends Shape
{
    /**
     * @param array{
     *     content?: string|null,
     *     documentId?: string|null,
     *     documentTitle?: string|null,
     *     documentUri?: string|null,
     *     documentAttributes?: list<DocumentAttribute>|null,
     *     scoreAttributes?: ScoreAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
