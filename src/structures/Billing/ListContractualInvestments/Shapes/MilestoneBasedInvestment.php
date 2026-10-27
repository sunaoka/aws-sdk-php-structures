<?php

namespace Sunaoka\Aws\Structures\Billing\ListContractualInvestments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $investmentId
 * @property Amount $investmentValue
 * @property \Aws\Api\DateTimeResult $investmentDisbursedAt
 */
class MilestoneBasedInvestment extends Shape
{
    /**
     * @param array{
     *     investmentId: string,
     *     investmentValue: Amount,
     *     investmentDisbursedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
