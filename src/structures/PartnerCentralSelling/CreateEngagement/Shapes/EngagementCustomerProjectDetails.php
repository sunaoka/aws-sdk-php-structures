<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BusinessProblem
 * @property string $TargetCompletionDate
 * @property string $Title
 */
class EngagementCustomerProjectDetails extends Shape
{
    /**
     * @param array{
     *     BusinessProblem: string,
     *     TargetCompletionDate: string,
     *     Title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
