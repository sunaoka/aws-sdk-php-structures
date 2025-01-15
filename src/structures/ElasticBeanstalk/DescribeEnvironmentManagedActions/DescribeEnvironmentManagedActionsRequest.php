<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentManagedActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EnvironmentName
 * @property string|null $EnvironmentId
 * @property 'Scheduled'|'Pending'|'Running'|'Unknown'|null $Status
 */
class DescribeEnvironmentManagedActionsRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentName?: string|null,
     *     EnvironmentId?: string|null,
     *     Status?: 'Scheduled'|'Pending'|'Running'|'Unknown'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
