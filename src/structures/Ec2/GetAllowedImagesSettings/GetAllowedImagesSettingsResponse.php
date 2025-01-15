<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAllowedImagesSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $State
 * @property list<Shapes\ImageCriterion>|null $ImageCriteria
 * @property 'account'|'declarative-policy'|null $ManagedBy
 */
class GetAllowedImagesSettingsResponse extends Response
{
}
