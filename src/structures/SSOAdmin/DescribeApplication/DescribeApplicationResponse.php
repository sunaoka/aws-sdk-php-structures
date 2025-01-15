<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationAccount
 * @property string|null $ApplicationArn
 * @property string|null $ApplicationProviderArn
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $Description
 * @property string|null $InstanceArn
 * @property string|null $Name
 * @property Shapes\PortalOptions|null $PortalOptions
 * @property 'ENABLED'|'DISABLED'|null $Status
 */
class DescribeApplicationResponse extends Response
{
}
