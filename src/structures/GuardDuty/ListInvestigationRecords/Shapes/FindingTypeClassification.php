<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FindingType
 * @property string|null $Classification
 * @property int<0, max>|null $Count
 * @property double|null $Percentage
 * @property string|null $Description
 */
class FindingTypeClassification extends Shape
{
    /**
     * @param array{
     *     FindingType?: string|null,
     *     Classification?: string|null,
     *     Count?: int<0, max>|null,
     *     Percentage?: double|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
