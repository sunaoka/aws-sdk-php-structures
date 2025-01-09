<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeComplianceByConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CappedCount
 * @property bool $CapExceeded
 */
class ComplianceContributorCount extends Shape
{
    /**
     * @param array{
     *     CappedCount?: int,
     *     CapExceeded?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
