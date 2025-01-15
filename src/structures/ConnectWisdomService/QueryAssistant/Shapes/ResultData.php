<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $document
 * @property double|null $relevanceScore
 * @property string $resultId
 */
class ResultData extends Shape
{
    /**
     * @param array{
     *     document: Document,
     *     relevanceScore?: double|null,
     *     resultId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
