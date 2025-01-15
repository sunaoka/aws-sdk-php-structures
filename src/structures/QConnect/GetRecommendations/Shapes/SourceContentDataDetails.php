<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CitationSpan|null $citationSpan
 * @property string $id
 * @property RankingData $rankingData
 * @property TextData $textData
 * @property 'KNOWLEDGE_CONTENT' $type
 */
class SourceContentDataDetails extends Shape
{
    /**
     * @param array{
     *     citationSpan?: CitationSpan|null,
     *     id: string,
     *     rankingData: RankingData,
     *     textData: TextData,
     *     type: 'KNOWLEDGE_CONTENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
