<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ApplyEnvironmentManagedAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ActionId
 * @property string|null $ActionDescription
 * @property 'InstanceRefresh'|'PlatformUpdate'|'Unknown'|null $ActionType
 * @property string|null $Status
 */
class ApplyEnvironmentManagedActionResponse extends Response
{
}
