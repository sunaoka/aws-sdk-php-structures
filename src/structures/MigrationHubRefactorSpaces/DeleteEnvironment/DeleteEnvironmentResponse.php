<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\DeleteEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $EnvironmentId
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $Name
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED' $State
 */
class DeleteEnvironmentResponse extends Response
{
}
