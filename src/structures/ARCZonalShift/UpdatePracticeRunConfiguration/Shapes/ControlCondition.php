<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\UpdatePracticeRunConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $alarmIdentifier
 * @property 'CLOUDWATCH' $type
 */
class ControlCondition extends Shape
{
    /**
     * @param array{
     *     alarmIdentifier: string,
     *     type: 'CLOUDWATCH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
