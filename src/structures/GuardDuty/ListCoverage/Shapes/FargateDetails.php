<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Issues
 * @property 'AUTO_MANAGED'|'MANUAL'|'DISABLED'|null $ManagementType
 */
class FargateDetails extends Shape
{
    /**
     * @param array{
     *     Issues?: list<string>|null,
     *     ManagementType?: 'AUTO_MANAGED'|'MANUAL'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
