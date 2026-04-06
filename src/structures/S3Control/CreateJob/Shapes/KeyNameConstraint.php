<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $MatchAnyPrefix
 * @property list<string>|null $MatchAnySuffix
 * @property list<string>|null $MatchAnySubstring
 */
class KeyNameConstraint extends Shape
{
    /**
     * @param array{
     *     MatchAnyPrefix?: list<string>|null,
     *     MatchAnySuffix?: list<string>|null,
     *     MatchAnySubstring?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
