<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutJobSuccessResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $summary
 * @property string $externalExecutionId
 * @property int<0, 100> $percentComplete
 */
class ExecutionDetails extends Shape
{
    /**
     * @param array{
     *     summary?: string,
     *     externalExecutionId?: string,
     *     percentComplete?: int<0, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
