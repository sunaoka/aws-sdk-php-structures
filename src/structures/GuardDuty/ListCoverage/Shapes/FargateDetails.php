<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Issues
 * @property 'AUTO_MANAGED'|'MANUAL'|'DISABLED' $ManagementType
 */
class FargateDetails extends Shape
{
    /**
     * @param array{
     *     Issues?: list<string>,
     *     ManagementType?: 'AUTO_MANAGED'|'MANUAL'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
