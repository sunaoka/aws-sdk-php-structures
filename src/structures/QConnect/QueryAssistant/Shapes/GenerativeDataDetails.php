<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $completion
 * @property list<DataSummary> $references
 * @property RankingData $rankingData
 */
class GenerativeDataDetails extends Shape
{
    /**
     * @param array{
     *     completion: string,
     *     references: list<DataSummary>,
     *     rankingData: RankingData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
