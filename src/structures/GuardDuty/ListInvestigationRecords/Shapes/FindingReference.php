<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FindingType
 * @property string|null $Uid
 */
class FindingReference extends Shape
{
    /**
     * @param array{
     *     FindingType?: string|null,
     *     Uid?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
