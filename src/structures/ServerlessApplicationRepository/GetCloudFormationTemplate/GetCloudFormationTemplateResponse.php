<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\GetCloudFormationTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationId
 * @property string $CreationTime
 * @property string $ExpirationTime
 * @property string $SemanticVersion
 * @property 'PREPARING'|'ACTIVE'|'EXPIRED' $Status
 * @property string $TemplateId
 * @property string $TemplateUrl
 */
class GetCloudFormationTemplateResponse extends Response
{
}
