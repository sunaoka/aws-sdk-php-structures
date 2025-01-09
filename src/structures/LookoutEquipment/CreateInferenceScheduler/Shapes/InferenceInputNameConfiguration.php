<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateInferenceScheduler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TimestampFormat
 * @property string $ComponentTimestampDelimiter
 */
class InferenceInputNameConfiguration extends Shape
{
    /**
     * @param array{
     *     TimestampFormat?: string,
     *     ComponentTimestampDelimiter?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
