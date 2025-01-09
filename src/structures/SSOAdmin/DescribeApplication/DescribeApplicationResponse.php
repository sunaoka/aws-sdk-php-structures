<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationAccount
 * @property string $ApplicationArn
 * @property string $ApplicationProviderArn
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $Description
 * @property string $InstanceArn
 * @property string $Name
 * @property Shapes\PortalOptions $PortalOptions
 * @property 'ENABLED'|'DISABLED' $Status
 */
class DescribeApplicationResponse extends Response
{
}
