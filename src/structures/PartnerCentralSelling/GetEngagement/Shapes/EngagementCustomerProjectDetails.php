<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property string $BusinessProblem
 * @property string $TargetCompletionDate
 */
class EngagementCustomerProjectDetails extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     BusinessProblem: string,
     *     TargetCompletionDate: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
