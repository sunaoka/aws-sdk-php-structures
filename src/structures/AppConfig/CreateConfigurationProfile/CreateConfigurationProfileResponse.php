<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateConfigurationProfile;

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
 */
class CreateConfigurationProfileResponse extends Response
{
}
