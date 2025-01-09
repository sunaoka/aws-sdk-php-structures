<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeExportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $ExportTaskId
 * @property ExportToS3Task $ExportToS3Task
 * @property InstanceExportDetails $InstanceExportDetails
 * @property 'active'|'cancelling'|'cancelled'|'completed' $State
 * @property string $StatusMessage
 * @property list<Tag> $Tags
 */
class ExportTask extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     ExportTaskId?: string,
     *     ExportToS3Task?: ExportToS3Task,
     *     InstanceExportDetails?: InstanceExportDetails,
     *     State?: 'active'|'cancelling'|'cancelled'|'completed',
     *     StatusMessage?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
