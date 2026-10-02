<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\ListWebFunctions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $functionName
 * @property string $functionArn
 * @property 'Pending'|'Active'|'Failed'|'Deleting' $state
 * @property string $stateReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class FunctionSummary extends Shape
{
    /**
     * @param array{
     *     functionName: string,
     *     functionArn: string,
     *     state: 'Pending'|'Active'|'Failed'|'Deleting',
     *     stateReason: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
