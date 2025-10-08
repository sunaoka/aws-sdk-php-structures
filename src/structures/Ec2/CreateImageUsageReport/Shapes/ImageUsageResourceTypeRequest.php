<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateImageUsageReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property list<ImageUsageResourceTypeOptionRequest>|null $ResourceTypeOptions
 */
class ImageUsageResourceTypeRequest extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     ResourceTypeOptions?: list<ImageUsageResourceTypeOptionRequest>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
