<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeHub;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $HubArn
 * @property string $SubscribedAt
 * @property bool $AutoEnableControls
 * @property 'STANDARD_CONTROL'|'SECURITY_CONTROL' $ControlFindingGenerator
 */
class DescribeHubResponse extends Response
{
}
