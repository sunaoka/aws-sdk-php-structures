<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageUsageReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property list<ImageUsageResourceTypeOption>|null $ResourceTypeOptions
 */
class ImageUsageResourceType extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     ResourceTypeOptions?: list<ImageUsageResourceTypeOption>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
