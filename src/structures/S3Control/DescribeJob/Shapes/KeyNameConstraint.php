<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $MatchAnyPrefix
 * @property list<string> $MatchAnySuffix
 * @property list<string> $MatchAnySubstring
 */
class KeyNameConstraint extends Shape
{
    /**
     * @param array{
     *     MatchAnyPrefix?: list<string>,
     *     MatchAnySuffix?: list<string>,
     *     MatchAnySubstring?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
