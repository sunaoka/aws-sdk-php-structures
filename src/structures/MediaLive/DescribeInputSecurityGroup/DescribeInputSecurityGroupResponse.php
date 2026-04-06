<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInputSecurityGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property list<string>|null $Inputs
 * @property 'IDLE'|'IN_USE'|'UPDATING'|'DELETED'|null $State
 * @property array<string, string>|null $Tags
 * @property list<Shapes\InputWhitelistRule>|null $WhitelistRules
 */
class DescribeInputSecurityGroupResponse extends Response
{
}
