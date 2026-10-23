<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListScheduleActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $outputName
 * @property 'ENABLED'|'DISABLED' $status
 */
class UpdateOutputStatus extends Shape
{
    /**
     * @param array{
     *     outputName: string,
     *     status: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
