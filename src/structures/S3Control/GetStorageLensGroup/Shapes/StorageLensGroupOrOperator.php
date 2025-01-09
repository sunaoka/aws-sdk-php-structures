<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $MatchAnyPrefix
 * @property list<string> $MatchAnySuffix
 * @property list<S3Tag> $MatchAnyTag
 * @property MatchObjectAge $MatchObjectAge
 * @property MatchObjectSize $MatchObjectSize
 */
class StorageLensGroupOrOperator extends Shape
{
    /**
     * @param array{
     *     MatchAnyPrefix?: list<string>,
     *     MatchAnySuffix?: list<string>,
     *     MatchAnyTag?: list<S3Tag>,
     *     MatchObjectAge?: MatchObjectAge,
     *     MatchObjectSize?: MatchObjectSize
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
