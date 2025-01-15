<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetMatches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MatchId
 * @property list<string>|null $ProfileIds
 * @property double|null $ConfidenceScore
 */
class MatchItem extends Shape
{
    /**
     * @param array{
     *     MatchId?: string|null,
     *     ProfileIds?: list<string>|null,
     *     ConfidenceScore?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
