<?php

namespace Sunaoka\Aws\Structures\Backup\CreateReportPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3BucketName
 * @property string $S3KeyPrefix
 * @property list<string> $Formats
 */
class ReportDeliveryChannel extends Shape
{
    /**
     * @param array{
     *     S3BucketName: string,
     *     S3KeyPrefix?: string,
     *     Formats?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
