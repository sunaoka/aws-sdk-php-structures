<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateProfileJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FULL_DATASET'|'CUSTOM_ROWS' $Mode
 * @property int $Size
 */
class JobSample extends Shape
{
    /**
     * @param array{
     *     Mode?: 'FULL_DATASET'|'CUSTOM_ROWS',
     *     Size?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
