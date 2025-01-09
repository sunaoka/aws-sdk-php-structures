<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringCondition> $ObjectKeys
 * @property list<LongCondition> $Sizes
 * @property list<TimeCondition> $CreationTimes
 * @property list<StringCondition> $VersionIds
 * @property list<StringCondition> $ETags
 */
class S3ItemFilter extends Shape
{
    /**
     * @param array{
     *     ObjectKeys?: list<StringCondition>,
     *     Sizes?: list<LongCondition>,
     *     CreationTimes?: list<TimeCondition>,
     *     VersionIds?: list<StringCondition>,
     *     ETags?: list<StringCondition>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
