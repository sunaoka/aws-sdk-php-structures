<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $completion
 * @property RankingData $rankingData
 * @property list<DataSummary> $references
 */
class GenerativeDataDetails extends Shape
{
    /**
     * @param array{
     *     completion: string,
     *     rankingData: RankingData,
     *     references: list<DataSummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
