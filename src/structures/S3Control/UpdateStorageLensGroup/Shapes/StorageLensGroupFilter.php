<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateStorageLensGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $MatchAnyPrefix
 * @property list<string> $MatchAnySuffix
 * @property list<S3Tag> $MatchAnyTag
 * @property MatchObjectAge $MatchObjectAge
 * @property MatchObjectSize $MatchObjectSize
 * @property StorageLensGroupAndOperator $And
 * @property StorageLensGroupOrOperator $Or
 */
class StorageLensGroupFilter extends Shape
{
    /**
     * @param array{
     *     MatchAnyPrefix?: list<string>,
     *     MatchAnySuffix?: list<string>,
     *     MatchAnyTag?: list<S3Tag>,
     *     MatchObjectAge?: MatchObjectAge,
     *     MatchObjectSize?: MatchObjectSize,
     *     And?: StorageLensGroupAndOperator,
     *     Or?: StorageLensGroupOrOperator
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
