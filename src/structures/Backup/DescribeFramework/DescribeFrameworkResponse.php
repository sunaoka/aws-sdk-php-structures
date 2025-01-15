<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeFramework;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FrameworkName
 * @property string|null $FrameworkArn
 * @property string|null $FrameworkDescription
 * @property list<Shapes\FrameworkControl>|null $FrameworkControls
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $DeploymentStatus
 * @property string|null $FrameworkStatus
 * @property string|null $IdempotencyToken
 */
class DescribeFrameworkResponse extends Response
{
}
