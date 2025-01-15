<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringCondition>|null $ObjectKeys
 * @property list<LongCondition>|null $Sizes
 * @property list<TimeCondition>|null $CreationTimes
 * @property list<StringCondition>|null $VersionIds
 * @property list<StringCondition>|null $ETags
 */
class S3ItemFilter extends Shape
{
    /**
     * @param array{
     *     ObjectKeys?: list<StringCondition>|null,
     *     Sizes?: list<LongCondition>|null,
     *     CreationTimes?: list<TimeCondition>|null,
     *     VersionIds?: list<StringCondition>|null,
     *     ETags?: list<StringCondition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
