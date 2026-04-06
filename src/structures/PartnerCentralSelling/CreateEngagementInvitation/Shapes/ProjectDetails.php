<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BusinessProblem
 * @property string $Title
 * @property string $TargetCompletionDate
 * @property list<ExpectedCustomerSpend> $ExpectedCustomerSpend
 */
class ProjectDetails extends Shape
{
    /**
     * @param array{
     *     BusinessProblem: string,
     *     Title: string,
     *     TargetCompletionDate: string,
     *     ExpectedCustomerSpend: list<ExpectedCustomerSpend>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
