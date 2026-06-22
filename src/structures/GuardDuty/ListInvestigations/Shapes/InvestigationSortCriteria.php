<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'START_TIME'|'END_TIME'|'STATUS'|'RISK_LEVEL'|'CONFIDENCE'|null $AttributeName
 * @property 'ASC'|'DESC'|null $OrderBy
 */
class InvestigationSortCriteria extends Shape
{
    /**
     * @param array{
     *     AttributeName?: 'START_TIME'|'END_TIME'|'STATUS'|'RISK_LEVEL'|'CONFIDENCE'|null,
     *     OrderBy?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
