<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetUtterancesView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $botVersion
 * @property list<UtteranceData>|null $utterances
 */
class UtteranceList extends Shape
{
    /**
     * @param array{
     *     botVersion?: string|null,
     *     utterances?: list<UtteranceData>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
