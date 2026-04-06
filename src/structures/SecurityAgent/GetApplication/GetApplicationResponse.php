<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationId
 * @property string $domain
 * @property string|null $applicationName
 * @property Shapes\IdCConfiguration|null $idcConfiguration
 * @property string|null $roleArn
 * @property string|null $defaultKmsKeyId
 */
class GetApplicationResponse extends Response
{
}
