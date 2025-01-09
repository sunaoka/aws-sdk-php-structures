<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $code
 * @property string $location
 */
class ExperimentError extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     code?: string,
     *     location?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
