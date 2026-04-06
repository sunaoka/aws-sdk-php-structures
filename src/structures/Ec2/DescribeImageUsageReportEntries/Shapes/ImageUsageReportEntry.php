<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageUsageReportEntries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property string|null $ReportId
 * @property int|null $UsageCount
 * @property string|null $AccountId
 * @property string|null $ImageId
 * @property \Aws\Api\DateTimeResult|null $ReportCreationTime
 */
class ImageUsageReportEntry extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     ReportId?: string|null,
     *     UsageCount?: int|null,
     *     AccountId?: string|null,
     *     ImageId?: string|null,
     *     ReportCreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
