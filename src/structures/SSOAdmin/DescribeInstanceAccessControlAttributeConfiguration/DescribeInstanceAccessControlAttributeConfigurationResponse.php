<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeInstanceAccessControlAttributeConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\InstanceAccessControlAttributeConfiguration|null $InstanceAccessControlAttributeConfiguration
 * @property 'ENABLED'|'CREATION_IN_PROGRESS'|'CREATION_FAILED'|null $Status
 * @property string|null $StatusReason
 */
class DescribeInstanceAccessControlAttributeConfigurationResponse extends Response
{
}
