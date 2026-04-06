<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListBusinessReportSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ONE_DAY'|'ONE_WEEK'|'THIRTY_DAYS' $Interval
 */
class BusinessReportContentRange extends Shape
{
    /**
     * @param array{Interval: 'ONE_DAY'|'ONE_WEEK'|'THIRTY_DAYS'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
