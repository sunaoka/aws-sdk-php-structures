<?php

namespace Sunaoka\Aws\Structures\Cloud9\DescribeEnvironmentStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'error'|'creating'|'connecting'|'ready'|'stopping'|'stopped'|'deleting' $status
 * @property string $message
 */
class DescribeEnvironmentStatusResponse extends Response
{
}
