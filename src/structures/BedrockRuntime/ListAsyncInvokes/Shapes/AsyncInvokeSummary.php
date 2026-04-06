<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ListAsyncInvokes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $invocationArn
 * @property string $modelArn
 * @property string|null $clientRequestToken
 * @property 'InProgress'|'Completed'|'Failed'|null $status
 * @property string|null $failureMessage
 * @property \Aws\Api\DateTimeResult $submitTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property AsyncInvokeOutputDataConfig $outputDataConfig
 */
class AsyncInvokeSummary extends Shape
{
    /**
     * @param array{
     *     invocationArn: string,
     *     modelArn: string,
     *     clientRequestToken?: string|null,
     *     status?: 'InProgress'|'Completed'|'Failed'|null,
     *     failureMessage?: string|null,
     *     submitTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     outputDataConfig: AsyncInvokeOutputDataConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
