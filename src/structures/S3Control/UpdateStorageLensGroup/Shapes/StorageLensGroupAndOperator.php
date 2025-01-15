<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateStorageLensGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $MatchAnyPrefix
 * @property list<string>|null $MatchAnySuffix
 * @property list<S3Tag>|null $MatchAnyTag
 * @property MatchObjectAge|null $MatchObjectAge
 * @property MatchObjectSize|null $MatchObjectSize
 */
class StorageLensGroupAndOperator extends Shape
{
    /**
     * @param array{
     *     MatchAnyPrefix?: list<string>|null,
     *     MatchAnySuffix?: list<string>|null,
     *     MatchAnyTag?: list<S3Tag>|null,
     *     MatchObjectAge?: MatchObjectAge|null,
     *     MatchObjectSize?: MatchObjectSize|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
