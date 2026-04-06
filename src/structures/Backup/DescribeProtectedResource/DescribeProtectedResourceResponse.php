<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeProtectedResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResourceArn
 * @property string|null $ResourceType
 * @property \Aws\Api\DateTimeResult|null $LastBackupTime
 * @property string|null $ResourceName
 */
class DescribeProtectedResourceResponse extends Response
{
}
