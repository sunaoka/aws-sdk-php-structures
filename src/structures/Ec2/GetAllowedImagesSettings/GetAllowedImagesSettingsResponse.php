<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAllowedImagesSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $State
 * @property list<Shapes\ImageCriterion> $ImageCriteria
 * @property 'account'|'declarative-policy' $ManagedBy
 */
class GetAllowedImagesSettingsResponse extends Response
{
}
