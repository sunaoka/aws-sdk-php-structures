<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $functionName
 * @property string $functionArn
 * @property 'Pending'|'Active'|'Failed'|'Deleting' $state
 * @property string $stateReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property Shapes\FunctionRevisionSummary|null $revision
 * @property Shapes\FunctionEndpointSummary|null $endpoint
 * @property array<string, string>|null $tags
 */
class CreateWebFunctionResponse extends Response
{
}
