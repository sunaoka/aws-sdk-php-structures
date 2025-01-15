<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\DeleteService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationId
 * @property string|null $Arn
 * @property string|null $EnvironmentId
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $Name
 * @property string|null $ServiceId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $State
 */
class DeleteServiceResponse extends Response
{
}
