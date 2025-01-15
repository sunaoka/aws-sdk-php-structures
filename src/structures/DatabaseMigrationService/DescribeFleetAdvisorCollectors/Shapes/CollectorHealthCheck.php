<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UNREGISTERED'|'ACTIVE'|null $CollectorStatus
 * @property bool|null $LocalCollectorS3Access
 * @property bool|null $WebCollectorS3Access
 * @property bool|null $WebCollectorGrantedRoleBasedAccess
 */
class CollectorHealthCheck extends Shape
{
    /**
     * @param array{
     *     CollectorStatus?: 'UNREGISTERED'|'ACTIVE'|null,
     *     LocalCollectorS3Access?: bool|null,
     *     WebCollectorS3Access?: bool|null,
     *     WebCollectorGrantedRoleBasedAccess?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
