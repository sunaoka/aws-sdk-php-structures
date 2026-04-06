<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\GetAsyncInvoke;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $invocationArn
 * @property string $modelArn
 * @property string|null $clientRequestToken
 * @property 'InProgress'|'Completed'|'Failed' $status
 * @property string|null $failureMessage
 * @property \Aws\Api\DateTimeResult $submitTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property Shapes\AsyncInvokeOutputDataConfig $outputDataConfig
 */
class GetAsyncInvokeResponse extends Response
{
}
