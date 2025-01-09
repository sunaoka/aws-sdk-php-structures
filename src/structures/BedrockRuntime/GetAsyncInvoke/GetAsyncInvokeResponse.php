<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\GetAsyncInvoke;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $invocationArn
 * @property string $modelArn
 * @property string $clientRequestToken
 * @property 'InProgress'|'Completed'|'Failed' $status
 * @property string $failureMessage
 * @property \Aws\Api\DateTimeResult $submitTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property Shapes\AsyncInvokeOutputDataConfig $outputDataConfig
 */
class GetAsyncInvokeResponse extends Response
{
}
