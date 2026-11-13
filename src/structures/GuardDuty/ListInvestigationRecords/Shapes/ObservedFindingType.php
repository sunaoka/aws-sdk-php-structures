<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FindingType
 * @property int<0, max>|null $Count
 * @property double|null $SeverityMax
 * @property list<SharedResource>|null $SharedResources
 */
class ObservedFindingType extends Shape
{
    /**
     * @param array{
     *     FindingType?: string|null,
     *     Count?: int<0, max>|null,
     *     SeverityMax?: double|null,
     *     SharedResources?: list<SharedResource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
