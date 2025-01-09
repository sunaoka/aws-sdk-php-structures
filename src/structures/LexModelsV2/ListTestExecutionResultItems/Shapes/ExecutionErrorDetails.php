<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorCode
 * @property string $errorMessage
 */
class ExecutionErrorDetails extends Shape
{
    /**
     * @param array{
     *     errorCode: string,
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
