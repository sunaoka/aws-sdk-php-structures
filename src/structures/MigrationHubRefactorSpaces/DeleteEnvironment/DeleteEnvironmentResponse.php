<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\DeleteEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $EnvironmentId
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $Name
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $State
 */
class DeleteEnvironmentResponse extends Response
{
}
