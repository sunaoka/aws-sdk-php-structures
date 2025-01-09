<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetMatches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MatchId
 * @property list<string> $ProfileIds
 * @property double $ConfidenceScore
 */
class MatchItem extends Shape
{
    /**
     * @param array{
     *     MatchId?: string,
     *     ProfileIds?: list<string>,
     *     ConfidenceScore?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
