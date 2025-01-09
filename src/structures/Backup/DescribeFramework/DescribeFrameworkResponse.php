<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeFramework;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FrameworkName
 * @property string $FrameworkArn
 * @property string $FrameworkDescription
 * @property list<Shapes\FrameworkControl> $FrameworkControls
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $DeploymentStatus
 * @property string $FrameworkStatus
 * @property string $IdempotencyToken
 */
class DescribeFrameworkResponse extends Response
{
}
