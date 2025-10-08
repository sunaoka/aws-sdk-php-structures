<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GenerateMatchId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MatchedRecord> $records
 * @property string $matchId
 * @property string $matchRule
 */
class MatchGroup extends Shape
{
    /**
     * @param array{
     *     records: list<MatchedRecord>,
     *     matchId: string,
     *     matchRule: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
