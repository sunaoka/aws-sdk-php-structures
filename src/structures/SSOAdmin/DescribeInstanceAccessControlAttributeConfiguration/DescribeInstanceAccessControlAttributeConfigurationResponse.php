<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeInstanceAccessControlAttributeConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ENABLED'|'CREATION_IN_PROGRESS'|'CREATION_FAILED'|null $Status
 * @property string|null $StatusReason
 * @property Shapes\InstanceAccessControlAttributeConfiguration|null $InstanceAccessControlAttributeConfiguration
 */
class DescribeInstanceAccessControlAttributeConfigurationResponse extends Response
{
}
