<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageUsageReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OptionName
 * @property list<string>|null $OptionValues
 */
class ImageUsageResourceTypeOption extends Shape
{
    /**
     * @param array{
     *     OptionName?: string|null,
     *     OptionValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
