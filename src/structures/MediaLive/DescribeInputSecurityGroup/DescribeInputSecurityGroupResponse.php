<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInputSecurityGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property list<string> $Inputs
 * @property 'IDLE'|'IN_USE'|'UPDATING'|'DELETED' $State
 * @property array<string, string> $Tags
 * @property list<Shapes\InputWhitelistRule> $WhitelistRules
 */
class DescribeInputSecurityGroupResponse extends Response
{
}
