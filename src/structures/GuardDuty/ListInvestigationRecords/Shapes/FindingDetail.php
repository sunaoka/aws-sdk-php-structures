<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FindingId
 * @property string|null $FindingType
 * @property string|null $Severity
 * @property string|null $AccountId
 * @property string|null $Region
 * @property ActivityWindow|null $ActivityWindow
 */
class FindingDetail extends Shape
{
    /**
     * @param array{
     *     FindingId?: string|null,
     *     FindingType?: string|null,
     *     Severity?: string|null,
     *     AccountId?: string|null,
     *     Region?: string|null,
     *     ActivityWindow?: ActivityWindow|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
