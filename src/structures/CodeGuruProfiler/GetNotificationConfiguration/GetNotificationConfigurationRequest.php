<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profilingGroupName
 */
class GetNotificationConfigurationRequest extends Request
{
    /**
     * @param array{profilingGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
