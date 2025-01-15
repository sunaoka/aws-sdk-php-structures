<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringCondition>|null $FilePaths
 * @property list<LongCondition>|null $Sizes
 * @property list<TimeCondition>|null $CreationTimes
 * @property list<TimeCondition>|null $LastModificationTimes
 */
class EBSItemFilter extends Shape
{
    /**
     * @param array{
     *     FilePaths?: list<StringCondition>|null,
     *     Sizes?: list<LongCondition>|null,
     *     CreationTimes?: list<TimeCondition>|null,
     *     LastModificationTimes?: list<TimeCondition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
