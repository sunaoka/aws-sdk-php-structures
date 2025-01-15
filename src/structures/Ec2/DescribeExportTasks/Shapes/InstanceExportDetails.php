<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeExportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property 'citrix'|'vmware'|'microsoft'|null $TargetEnvironment
 */
class InstanceExportDetails extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     TargetEnvironment?: 'citrix'|'vmware'|'microsoft'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
