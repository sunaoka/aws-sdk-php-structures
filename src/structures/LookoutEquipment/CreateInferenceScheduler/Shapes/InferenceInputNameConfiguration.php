<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateInferenceScheduler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TimestampFormat
 * @property string|null $ComponentTimestampDelimiter
 */
class InferenceInputNameConfiguration extends Shape
{
    /**
     * @param array{
     *     TimestampFormat?: string|null,
     *     ComponentTimestampDelimiter?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
