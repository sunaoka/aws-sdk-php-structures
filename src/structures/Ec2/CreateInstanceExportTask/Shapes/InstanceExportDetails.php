<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property 'citrix'|'vmware'|'microsoft' $TargetEnvironment
 */
class InstanceExportDetails extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     TargetEnvironment?: 'citrix'|'vmware'|'microsoft'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
