<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeExportImageTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $ExportImageTaskId
 * @property string|null $ImageId
 * @property string|null $Progress
 * @property ExportTaskS3Location|null $S3ExportLocation
 * @property string|null $Status
 * @property string|null $StatusMessage
 * @property list<Tag>|null $Tags
 */
class ExportImageTask extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     ExportImageTaskId?: string|null,
     *     ImageId?: string|null,
     *     Progress?: string|null,
     *     S3ExportLocation?: ExportTaskS3Location|null,
     *     Status?: string|null,
     *     StatusMessage?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
