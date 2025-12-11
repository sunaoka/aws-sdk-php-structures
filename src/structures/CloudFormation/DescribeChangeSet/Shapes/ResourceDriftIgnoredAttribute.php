<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Path
 * @property 'MANAGED_BY_AWS'|'WRITE_ONLY_PROPERTY'|null $Reason
 */
class ResourceDriftIgnoredAttribute extends Shape
{
    /**
     * @param array{
     *     Path?: string|null,
     *     Reason?: 'MANAGED_BY_AWS'|'WRITE_ONLY_PROPERTY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
