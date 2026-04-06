<?php

namespace Sunaoka\Aws\Structures\Detective\ListInvestigations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringFilter|null $Severity
 * @property StringFilter|null $Status
 * @property StringFilter|null $State
 * @property StringFilter|null $EntityArn
 * @property DateFilter|null $CreatedTime
 */
class FilterCriteria extends Shape
{
    /**
     * @param array{
     *     Severity?: StringFilter|null,
     *     Status?: StringFilter|null,
     *     State?: StringFilter|null,
     *     EntityArn?: StringFilter|null,
     *     CreatedTime?: DateFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
