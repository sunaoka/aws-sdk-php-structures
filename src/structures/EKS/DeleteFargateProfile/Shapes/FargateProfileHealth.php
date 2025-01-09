<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteFargateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FargateProfileIssue> $issues
 */
class FargateProfileHealth extends Shape
{
    /**
     * @param array{issues?: list<FargateProfileIssue>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
