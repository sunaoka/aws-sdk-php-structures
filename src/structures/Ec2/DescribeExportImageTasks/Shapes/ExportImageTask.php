<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeExportImageTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $ExportImageTaskId
 * @property string $ImageId
 * @property string $Progress
 * @property ExportTaskS3Location $S3ExportLocation
 * @property string $Status
 * @property string $StatusMessage
 * @property list<Tag> $Tags
 */
class ExportImageTask extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     ExportImageTaskId?: string,
     *     ImageId?: string,
     *     Progress?: string,
     *     S3ExportLocation?: ExportTaskS3Location,
     *     Status?: string,
     *     StatusMessage?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
