<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AvailNum
 * @property int|null $AvailsExpected
 * @property int|null $SpliceEventId
 * @property int|null $UniqueProgramId
 */
class SpliceInsertMessage extends Shape
{
    /**
     * @param array{
     *     AvailNum?: int|null,
     *     AvailsExpected?: int|null,
     *     SpliceEventId?: int|null,
     *     UniqueProgramId?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
