<?php

namespace Sunaoka\Aws\Structures\LocationService\GetJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ValidateAddress' $Action
 * @property Shapes\JobActionOptions|null $ActionOptions
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property Shapes\JobError|null $Error
 * @property string $ExecutionRoleArn
 * @property Shapes\JobInputOptions $InputOptions
 * @property string $JobArn
 * @property string $JobId
 * @property string|null $Name
 * @property Shapes\JobOutputOptions $OutputOptions
 * @property 'Pending'|'Running'|'Completed'|'Failed'|'Cancelling'|'Cancelled' $Status
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property array<string, string>|null $Tags
 */
class GetJobResponse extends Response
{
}
