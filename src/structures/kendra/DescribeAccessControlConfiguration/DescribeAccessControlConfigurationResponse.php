<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeAccessControlConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Description
 * @property string $ErrorMessage
 * @property list<Shapes\Principal> $AccessControlList
 * @property list<Shapes\HierarchicalPrincipal> $HierarchicalAccessControlList
 */
class DescribeAccessControlConfigurationResponse extends Response
{
}
