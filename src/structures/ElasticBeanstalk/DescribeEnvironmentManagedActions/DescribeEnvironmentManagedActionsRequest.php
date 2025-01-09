<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentManagedActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentName
 * @property string $EnvironmentId
 * @property 'Scheduled'|'Pending'|'Running'|'Unknown' $Status
 */
class DescribeEnvironmentManagedActionsRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentName?: string,
     *     EnvironmentId?: string,
     *     Status?: 'Scheduled'|'Pending'|'Running'|'Unknown'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
