<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $ExportTaskId
 * @property ExportToS3Task|null $ExportToS3Task
 * @property InstanceExportDetails|null $InstanceExportDetails
 * @property 'active'|'cancelling'|'cancelled'|'completed'|null $State
 * @property string|null $StatusMessage
 * @property list<Tag>|null $Tags
 */
class ExportTask extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     ExportTaskId?: string|null,
     *     ExportToS3Task?: ExportToS3Task|null,
     *     InstanceExportDetails?: InstanceExportDetails|null,
     *     State?: 'active'|'cancelling'|'cancelled'|'completed'|null,
     *     StatusMessage?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
