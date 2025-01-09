<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $offeringId
 * @property string $savingsPlanId
 * @property string $savingsPlanArn
 * @property string $description
 * @property string $start
 * @property string $end
 * @property 'payment-pending'|'payment-failed'|'active'|'retired'|'queued'|'queued-deleted'|'pending-return'|'returned' $state
 * @property string $region
 * @property string $ec2InstanceFamily
 * @property 'Compute'|'EC2Instance'|'SageMaker' $savingsPlanType
 * @property 'All Upfront'|'Partial Upfront'|'No Upfront' $paymentOption
 * @property list<'EC2'|'Fargate'|'Lambda'|'SageMaker'> $productTypes
 * @property 'CNY'|'USD' $currency
 * @property string $commitment
 * @property string $upfrontPaymentAmount
 * @property string $recurringPaymentAmount
 * @property int $termDurationInSeconds
 * @property array<string, string> $tags
 * @property string $returnableUntil
 */
class SavingsPlan extends Shape
{
    /**
     * @param array{
     *     offeringId?: string,
     *     savingsPlanId?: string,
     *     savingsPlanArn?: string,
     *     description?: string,
     *     start?: string,
     *     end?: string,
     *     state?: 'payment-pending'|'payment-failed'|'active'|'retired'|'queued'|'queued-deleted'|'pending-return'|'returned',
     *     region?: string,
     *     ec2InstanceFamily?: string,
     *     savingsPlanType?: 'Compute'|'EC2Instance'|'SageMaker',
     *     paymentOption?: 'All Upfront'|'Partial Upfront'|'No Upfront',
     *     productTypes?: list<'EC2'|'Fargate'|'Lambda'|'SageMaker'>,
     *     currency?: 'CNY'|'USD',
     *     commitment?: string,
     *     upfrontPaymentAmount?: string,
     *     recurringPaymentAmount?: string,
     *     termDurationInSeconds?: int,
     *     tags?: array<string, string>,
     *     returnableUntil?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
