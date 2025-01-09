<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $document
 * @property double $relevanceScore
 * @property string $resultId
 */
class ResultData extends Shape
{
    /**
     * @param array{
     *     document: Document,
     *     relevanceScore?: double,
     *     resultId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
