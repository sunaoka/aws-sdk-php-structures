<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeAccessControlConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $ErrorMessage
 * @property list<Shapes\Principal>|null $AccessControlList
 * @property list<Shapes\HierarchicalPrincipal>|null $HierarchicalAccessControlList
 */
class DescribeAccessControlConfigurationResponse extends Response
{
}
