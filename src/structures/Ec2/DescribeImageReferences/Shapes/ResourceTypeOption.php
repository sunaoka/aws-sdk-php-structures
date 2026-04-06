<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageReferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'state-name'|'version-depth'|null $OptionName
 * @property list<string>|null $OptionValues
 */
class ResourceTypeOption extends Shape
{
    /**
     * @param array{
     *     OptionName?: 'state-name'|'version-depth'|null,
     *     OptionValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
