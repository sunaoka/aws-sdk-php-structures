<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetCloseDate
 * @property 'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required'|null $ReviewStatus
 * @property 'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost'|null $Stage
 * @property string|null $NextSteps
 */
class LifeCycleForView extends Shape
{
    /**
     * @param array{
     *     TargetCloseDate?: string|null,
     *     ReviewStatus?: 'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required'|null,
     *     Stage?: 'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost'|null,
     *     NextSteps?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
