<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UNREGISTERED'|'ACTIVE' $CollectorStatus
 * @property bool $LocalCollectorS3Access
 * @property bool $WebCollectorS3Access
 * @property bool $WebCollectorGrantedRoleBasedAccess
 */
class CollectorHealthCheck extends Shape
{
    /**
     * @param array{
     *     CollectorStatus?: 'UNREGISTERED'|'ACTIVE',
     *     LocalCollectorS3Access?: bool,
     *     WebCollectorS3Access?: bool,
     *     WebCollectorGrantedRoleBasedAccess?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
