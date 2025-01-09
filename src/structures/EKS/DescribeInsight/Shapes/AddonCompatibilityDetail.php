<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string> $compatibleVersions
 */
class AddonCompatibilityDetail extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     compatibleVersions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
