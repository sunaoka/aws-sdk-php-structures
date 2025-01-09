<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewPolicyResultsForHIT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property list<string> $Values
 * @property list<ParameterMapEntry> $MapEntries
 */
class PolicyParameter extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Values?: list<string>,
     *     MapEntries?: list<ParameterMapEntry>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
