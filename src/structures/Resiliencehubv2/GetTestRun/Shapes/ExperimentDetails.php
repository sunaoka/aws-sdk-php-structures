<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetTestRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $experimentArn
 * @property string|null $details
 */
class ExperimentDetails extends Shape
{
    /**
     * @param array{
     *     experimentArn: string,
     *     details?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
