<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'KNOWLEDGE_CONTENT' $type
 * @property TextData $textData
 * @property RankingData $rankingData
 * @property CitationSpan|null $citationSpan
 */
class SourceContentDataDetails extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: 'KNOWLEDGE_CONTENT',
     *     textData: TextData,
     *     rankingData: RankingData,
     *     citationSpan?: CitationSpan|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
