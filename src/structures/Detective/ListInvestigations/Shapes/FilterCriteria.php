<?php

namespace Sunaoka\Aws\Structures\Detective\ListInvestigations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringFilter $Severity
 * @property StringFilter $Status
 * @property StringFilter $State
 * @property StringFilter $EntityArn
 * @property DateFilter $CreatedTime
 */
class FilterCriteria extends Shape
{
    /**
     * @param array{
     *     Severity?: StringFilter,
     *     Status?: StringFilter,
     *     State?: StringFilter,
     *     EntityArn?: StringFilter,
     *     CreatedTime?: DateFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
