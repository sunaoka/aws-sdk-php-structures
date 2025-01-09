<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeInstanceAccessControlAttributeConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\InstanceAccessControlAttributeConfiguration $InstanceAccessControlAttributeConfiguration
 * @property 'ENABLED'|'CREATION_IN_PROGRESS'|'CREATION_FAILED' $Status
 * @property string $StatusReason
 */
class DescribeInstanceAccessControlAttributeConfigurationResponse extends Response
{
}
