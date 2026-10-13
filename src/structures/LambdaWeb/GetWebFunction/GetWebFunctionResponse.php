<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\GetWebFunction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $functionName
 * @property string $functionArn
 * @property 'Pending'|'Active'|'Failed'|'Deleting' $state
 * @property string $stateReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetWebFunctionResponse extends Response
{
}
