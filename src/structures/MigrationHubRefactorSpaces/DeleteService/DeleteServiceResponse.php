<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\DeleteService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $EnvironmentId
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $Name
 * @property string $ServiceId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED' $State
 */
class DeleteServiceResponse extends Response
{
}
