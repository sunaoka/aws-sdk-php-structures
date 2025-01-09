<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\GetResourceRequestStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HookTypeName
 * @property string $HookTypeVersionId
 * @property string $HookTypeArn
 * @property string $InvocationPoint
 * @property string $HookStatus
 * @property \Aws\Api\DateTimeResult $HookEventTime
 * @property string $HookStatusMessage
 * @property string $FailureMode
 */
class HookProgressEvent extends Shape
{
    /**
     * @param array{
     *     HookTypeName?: string,
     *     HookTypeVersionId?: string,
     *     HookTypeArn?: string,
     *     InvocationPoint?: string,
     *     HookStatus?: string,
     *     HookEventTime?: \Aws\Api\DateTimeResult,
     *     HookStatusMessage?: string,
     *     FailureMode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
