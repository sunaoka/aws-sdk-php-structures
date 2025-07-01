<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\CreatePracticeRunConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLOUDWATCH' $type
 * @property string $alarmIdentifier
 */
class ControlCondition extends Shape
{
    /**
     * @param array{
     *     type: 'CLOUDWATCH',
     *     alarmIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
