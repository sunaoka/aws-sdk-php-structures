<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\DeleteApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationId
 * @property string|null $Arn
 * @property string|null $EnvironmentId
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $Name
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|null $State
 */
class DeleteApplicationResponse extends Response
{
}
