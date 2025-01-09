<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BusinessProblem
 * @property list<ExpectedCustomerSpend> $ExpectedCustomerSpend
 * @property string $TargetCompletionDate
 * @property string $Title
 */
class ProjectDetails extends Shape
{
    /**
     * @param array{
     *     BusinessProblem: string,
     *     ExpectedCustomerSpend: list<ExpectedCustomerSpend>,
     *     TargetCompletionDate: string,
     *     Title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
