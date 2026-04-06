<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeFargateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FargateProfileIssue>|null $issues
 */
class FargateProfileHealth extends Shape
{
    /**
     * @param array{issues?: list<FargateProfileIssue>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
