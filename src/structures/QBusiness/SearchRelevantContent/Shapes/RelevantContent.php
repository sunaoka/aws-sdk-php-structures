<?php

namespace Sunaoka\Aws\Structures\QBusiness\SearchRelevantContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 * @property string $documentId
 * @property string $documentTitle
 * @property string $documentUri
 * @property list<DocumentAttribute> $documentAttributes
 * @property ScoreAttributes $scoreAttributes
 */
class RelevantContent extends Shape
{
    /**
     * @param array{
     *     content?: string,
     *     documentId?: string,
     *     documentTitle?: string,
     *     documentUri?: string,
     *     documentAttributes?: list<DocumentAttribute>,
     *     scoreAttributes?: ScoreAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
