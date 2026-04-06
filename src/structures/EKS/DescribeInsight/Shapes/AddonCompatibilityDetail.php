<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property list<string>|null $compatibleVersions
 */
class AddonCompatibilityDetail extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     compatibleVersions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
