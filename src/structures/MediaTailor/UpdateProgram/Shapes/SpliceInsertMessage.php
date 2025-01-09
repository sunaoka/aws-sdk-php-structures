<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AvailNum
 * @property int $AvailsExpected
 * @property int $SpliceEventId
 * @property int $UniqueProgramId
 */
class SpliceInsertMessage extends Shape
{
    /**
     * @param array{
     *     AvailNum?: int,
     *     AvailsExpected?: int,
     *     SpliceEventId?: int,
     *     UniqueProgramId?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
