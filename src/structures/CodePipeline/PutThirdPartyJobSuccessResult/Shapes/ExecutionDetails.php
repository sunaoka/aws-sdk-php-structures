<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutThirdPartyJobSuccessResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $summary
 * @property string|null $externalExecutionId
 * @property int<0, 100>|null $percentComplete
 */
class ExecutionDetails extends Shape
{
    /**
     * @param array{
     *     summary?: string|null,
     *     externalExecutionId?: string|null,
     *     percentComplete?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
