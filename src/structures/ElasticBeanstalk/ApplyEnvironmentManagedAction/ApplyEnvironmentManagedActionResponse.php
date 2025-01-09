<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ApplyEnvironmentManagedAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ActionId
 * @property string $ActionDescription
 * @property 'InstanceRefresh'|'PlatformUpdate'|'Unknown' $ActionType
 * @property string $Status
 */
class ApplyEnvironmentManagedActionResponse extends Response
{
}
