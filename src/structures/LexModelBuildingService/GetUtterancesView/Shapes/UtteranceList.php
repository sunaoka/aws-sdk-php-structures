<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetUtterancesView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botVersion
 * @property list<UtteranceData> $utterances
 */
class UtteranceList extends Shape
{
    /**
     * @param array{
     *     botVersion?: string,
     *     utterances?: list<UtteranceData>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
