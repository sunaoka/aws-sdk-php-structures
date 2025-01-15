<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\GetResourceRequestStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HookTypeName
 * @property string|null $HookTypeVersionId
 * @property string|null $HookTypeArn
 * @property string|null $InvocationPoint
 * @property string|null $HookStatus
 * @property \Aws\Api\DateTimeResult|null $HookEventTime
 * @property string|null $HookStatusMessage
 * @property string|null $FailureMode
 */
class HookProgressEvent extends Shape
{
    /**
     * @param array{
     *     HookTypeName?: string|null,
     *     HookTypeVersionId?: string|null,
     *     HookTypeArn?: string|null,
     *     InvocationPoint?: string|null,
     *     HookStatus?: string|null,
     *     HookEventTime?: \Aws\Api\DateTimeResult|null,
     *     HookStatusMessage?: string|null,
     *     FailureMode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
