<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $offeringId
 * @property string|null $savingsPlanId
 * @property string|null $savingsPlanArn
 * @property string|null $description
 * @property string|null $start
 * @property string|null $end
 * @property 'payment-pending'|'payment-failed'|'active'|'retired'|'queued'|'queued-deleted'|'pending-return'|'returned'|null $state
 * @property string|null $region
 * @property string|null $ec2InstanceFamily
 * @property 'Compute'|'EC2Instance'|'SageMaker'|'Database'|null $savingsPlanType
 * @property 'All Upfront'|'Partial Upfront'|'No Upfront'|null $paymentOption
 * @property list<'EC2'|'Fargate'|'Lambda'|'SageMaker'|'RDS'|'DSQL'|'DynamoDB'|'ElastiCache'|'DocDB'|'Neptune'|'Timestream'|'Keyspaces'|'DMS'>|null $productTypes
 * @property 'CNY'|'USD'|'EUR'|null $currency
 * @property string|null $commitment
 * @property string|null $upfrontPaymentAmount
 * @property string|null $recurringPaymentAmount
 * @property int|null $termDurationInSeconds
 * @property array<string, string>|null $tags
 * @property string|null $returnableUntil
 */
class SavingsPlan extends Shape
{
    /**
     * @param array{
     *     offeringId?: string|null,
     *     savingsPlanId?: string|null,
     *     savingsPlanArn?: string|null,
     *     description?: string|null,
     *     start?: string|null,
     *     end?: string|null,
     *     state?: 'payment-pending'|'payment-failed'|'active'|'retired'|'queued'|'queued-deleted'|'pending-return'|'returned'|null,
     *     region?: string|null,
     *     ec2InstanceFamily?: string|null,
     *     savingsPlanType?: 'Compute'|'EC2Instance'|'SageMaker'|'Database'|null,
     *     paymentOption?: 'All Upfront'|'Partial Upfront'|'No Upfront'|null,
     *     productTypes?: list<'EC2'|'Fargate'|'Lambda'|'SageMaker'|'RDS'|'DSQL'|'DynamoDB'|'ElastiCache'|'DocDB'|'Neptune'|'Timestream'|'Keyspaces'|'DMS'>|null,
     *     currency?: 'CNY'|'USD'|'EUR'|null,
     *     commitment?: string|null,
     *     upfrontPaymentAmount?: string|null,
     *     recurringPaymentAmount?: string|null,
     *     termDurationInSeconds?: int|null,
     *     tags?: array<string, string>|null,
     *     returnableUntil?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
