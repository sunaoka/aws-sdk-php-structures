<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ListAsyncInvokes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $invocationArn
 * @property string $modelArn
 * @property string $clientRequestToken
 * @property 'InProgress'|'Completed'|'Failed' $status
 * @property string $failureMessage
 * @property \Aws\Api\DateTimeResult $submitTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property AsyncInvokeOutputDataConfig $outputDataConfig
 */
class AsyncInvokeSummary extends Shape
{
    /**
     * @param array{
     *     invocationArn: string,
     *     modelArn: string,
     *     clientRequestToken?: string,
     *     status?: 'InProgress'|'Completed'|'Failed',
     *     failureMessage?: string,
     *     submitTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     outputDataConfig: AsyncInvokeOutputDataConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
