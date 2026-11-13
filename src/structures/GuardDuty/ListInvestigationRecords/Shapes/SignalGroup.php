<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FindingType
 * @property double|null $Severity
 * @property int<0, max>|null $Count
 */
class SignalGroup extends Shape
{
    /**
     * @param array{
     *     FindingType?: string|null,
     *     Severity?: double|null,
     *     Count?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
