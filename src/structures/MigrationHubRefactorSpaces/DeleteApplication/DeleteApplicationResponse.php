<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\DeleteApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $EnvironmentId
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $Name
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING' $State
 */
class DeleteApplicationResponse extends Response
{
}
