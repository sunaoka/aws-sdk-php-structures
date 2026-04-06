<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageUsageReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ImageId
 * @property string|null $ReportId
 * @property list<ImageUsageResourceType>|null $ResourceTypes
 * @property list<string>|null $AccountIds
 * @property string|null $State
 * @property string|null $StateReason
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 * @property list<Tag>|null $Tags
 */
class ImageUsageReport extends Shape
{
    /**
     * @param array{
     *     ImageId?: string|null,
     *     ReportId?: string|null,
     *     ResourceTypes?: list<ImageUsageResourceType>|null,
     *     AccountIds?: list<string>|null,
     *     State?: string|null,
     *     StateReason?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     ExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
