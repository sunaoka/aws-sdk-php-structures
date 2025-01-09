<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringCondition> $FilePaths
 * @property list<LongCondition> $Sizes
 * @property list<TimeCondition> $CreationTimes
 * @property list<TimeCondition> $LastModificationTimes
 */
class EBSItemFilter extends Shape
{
    /**
     * @param array{
     *     FilePaths?: list<StringCondition>,
     *     Sizes?: list<LongCondition>,
     *     CreationTimes?: list<TimeCondition>,
     *     LastModificationTimes?: list<TimeCondition>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
