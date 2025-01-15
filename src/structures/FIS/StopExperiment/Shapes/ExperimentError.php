<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $code
 * @property string|null $location
 */
class ExperimentError extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     code?: string|null,
     *     location?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
