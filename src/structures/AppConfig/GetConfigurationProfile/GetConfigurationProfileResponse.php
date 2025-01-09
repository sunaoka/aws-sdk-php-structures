<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetConfigurationProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationId
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property string $LocationUri
 * @property string $RetrievalRoleArn
 * @property list<Shapes\Validator> $Validators
 * @property string $Type
 * @property string $KmsKeyArn
 * @property string $KmsKeyIdentifier
 */
class GetConfigurationProfileResponse extends Response
{
}
