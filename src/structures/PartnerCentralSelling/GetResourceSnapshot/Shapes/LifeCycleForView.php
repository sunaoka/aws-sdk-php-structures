<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NextSteps
 * @property 'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required' $ReviewStatus
 * @property 'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost' $Stage
 * @property string $TargetCloseDate
 */
class LifeCycleForView extends Shape
{
    /**
     * @param array{
     *     NextSteps?: string,
     *     ReviewStatus?: 'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required',
     *     Stage?: 'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost',
     *     TargetCloseDate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
