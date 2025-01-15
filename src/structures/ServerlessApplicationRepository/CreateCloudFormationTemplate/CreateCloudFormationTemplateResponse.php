<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateCloudFormationTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationId
 * @property string|null $CreationTime
 * @property string|null $ExpirationTime
 * @property string|null $SemanticVersion
 * @property 'PREPARING'|'ACTIVE'|'EXPIRED'|null $Status
 * @property string|null $TemplateId
 * @property string|null $TemplateUrl
 */
class CreateCloudFormationTemplateResponse extends Response
{
}
