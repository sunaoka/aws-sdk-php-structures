<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeComplianceByConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CappedCount
 * @property bool|null $CapExceeded
 */
class ComplianceContributorCount extends Shape
{
    /**
     * @param array{
     *     CappedCount?: int|null,
     *     CapExceeded?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
