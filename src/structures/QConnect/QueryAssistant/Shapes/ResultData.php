<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSummary|null $data
 * @property Document|null $document
 * @property double|null $relevanceScore
 * @property string $resultId
 * @property 'KNOWLEDGE_CONTENT'|'INTENT_ANSWER'|'GENERATIVE_ANSWER'|null $type
 */
class ResultData extends Shape
{
    /**
     * @param array{
     *     data?: DataSummary|null,
     *     document?: Document|null,
     *     relevanceScore?: double|null,
     *     resultId: string,
     *     type?: 'KNOWLEDGE_CONTENT'|'INTENT_ANSWER'|'GENERATIVE_ANSWER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
