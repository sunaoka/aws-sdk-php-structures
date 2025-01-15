<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateConfigurationProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationId
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $LocationUri
 * @property string|null $RetrievalRoleArn
 * @property list<Shapes\Validator>|null $Validators
 * @property string|null $Type
 * @property string|null $KmsKeyArn
 * @property string|null $KmsKeyIdentifier
 */
class UpdateConfigurationProfileResponse extends Response
{
}
