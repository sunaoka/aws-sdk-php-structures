<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationArn
 * @property string|null $ApplicationProviderArn
 * @property string|null $Name
 * @property string|null $ApplicationAccount
 * @property string|null $InstanceArn
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property Shapes\PortalOptions|null $PortalOptions
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 */
class DescribeApplicationResponse extends Response
{
}
