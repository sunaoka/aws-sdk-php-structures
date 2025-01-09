<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetDimensionValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SearchString
 * @property Shapes\DateInterval $TimePeriod
 * @property 'AZ'|'INSTANCE_TYPE'|'LINKED_ACCOUNT'|'LINKED_ACCOUNT_NAME'|'OPERATION'|'PURCHASE_TYPE'|'REGION'|'SERVICE'|'SERVICE_CODE'|'USAGE_TYPE'|'USAGE_TYPE_GROUP'|'RECORD_TYPE'|'OPERATING_SYSTEM'|'TENANCY'|'SCOPE'|'PLATFORM'|'SUBSCRIPTION_ID'|'LEGAL_ENTITY_NAME'|'DEPLOYMENT_OPTION'|'DATABASE_ENGINE'|'CACHE_ENGINE'|'INSTANCE_TYPE_FAMILY'|'BILLING_ENTITY'|'RESERVATION_ID'|'RESOURCE_ID'|'RIGHTSIZING_TYPE'|'SAVINGS_PLANS_TYPE'|'SAVINGS_PLAN_ARN'|'PAYMENT_OPTION'|'AGREEMENT_END_DATE_TIME_AFTER'|'AGREEMENT_END_DATE_TIME_BEFORE'|'INVOICING_ENTITY'|'ANOMALY_TOTAL_IMPACT_ABSOLUTE'|'ANOMALY_TOTAL_IMPACT_PERCENTAGE' $Dimension
 * @property 'COST_AND_USAGE'|'RESERVATIONS'|'SAVINGS_PLANS' $Context
 * @property Shapes\Expression $Filter
 * @property list<Shapes\SortDefinition> $SortBy
 * @property string $BillingViewArn
 * @property int $MaxResults
 * @property string $NextPageToken
 */
class GetDimensionValuesRequest extends Request
{
    /**
     * @param array{
     *     SearchString?: string,
     *     TimePeriod: Shapes\DateInterval,
     *     Dimension: 'AZ'|'INSTANCE_TYPE'|'LINKED_ACCOUNT'|'LINKED_ACCOUNT_NAME'|'OPERATION'|'PURCHASE_TYPE'|'REGION'|'SERVICE'|'SERVICE_CODE'|'USAGE_TYPE'|'USAGE_TYPE_GROUP'|'RECORD_TYPE'|'OPERATING_SYSTEM'|'TENANCY'|'SCOPE'|'PLATFORM'|'SUBSCRIPTION_ID'|'LEGAL_ENTITY_NAME'|'DEPLOYMENT_OPTION'|'DATABASE_ENGINE'|'CACHE_ENGINE'|'INSTANCE_TYPE_FAMILY'|'BILLING_ENTITY'|'RESERVATION_ID'|'RESOURCE_ID'|'RIGHTSIZING_TYPE'|'SAVINGS_PLANS_TYPE'|'SAVINGS_PLAN_ARN'|'PAYMENT_OPTION'|'AGREEMENT_END_DATE_TIME_AFTER'|'AGREEMENT_END_DATE_TIME_BEFORE'|'INVOICING_ENTITY'|'ANOMALY_TOTAL_IMPACT_ABSOLUTE'|'ANOMALY_TOTAL_IMPACT_PERCENTAGE',
     *     Context?: 'COST_AND_USAGE'|'RESERVATIONS'|'SAVINGS_PLANS',
     *     Filter?: Shapes\Expression,
     *     SortBy?: list<Shapes\SortDefinition>,
     *     BillingViewArn?: string,
     *     MaxResults?: int,
     *     NextPageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
