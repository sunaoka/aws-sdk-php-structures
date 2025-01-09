<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSummary $data
 * @property Document $document
 * @property double $relevanceScore
 * @property string $resultId
 * @property 'KNOWLEDGE_CONTENT'|'INTENT_ANSWER'|'GENERATIVE_ANSWER' $type
 */
class ResultData extends Shape
{
    /**
     * @param array{
     *     data?: DataSummary,
     *     document?: Document,
     *     relevanceScore?: double,
     *     resultId: string,
     *     type?: 'KNOWLEDGE_CONTENT'|'INTENT_ANSWER'|'GENERATIVE_ANSWER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
