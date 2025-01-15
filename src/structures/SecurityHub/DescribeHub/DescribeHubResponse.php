<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeHub;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $HubArn
 * @property string|null $SubscribedAt
 * @property bool|null $AutoEnableControls
 * @property 'STANDARD_CONTROL'|'SECURITY_CONTROL'|null $ControlFindingGenerator
 */
class DescribeHubResponse extends Response
{
}
