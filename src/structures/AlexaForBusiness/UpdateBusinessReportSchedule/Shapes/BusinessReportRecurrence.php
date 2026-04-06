<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateBusinessReportSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StartDate
 */
class BusinessReportRecurrence extends Shape
{
    /**
     * @param array{StartDate?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
