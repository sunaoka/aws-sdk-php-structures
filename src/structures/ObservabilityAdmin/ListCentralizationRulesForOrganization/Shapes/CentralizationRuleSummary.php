<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListCentralizationRulesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleName
 * @property string|null $RuleArn
 * @property string|null $CreatorAccountId
 * @property int|null $CreatedTimeStamp
 * @property string|null $CreatedRegion
 * @property int|null $LastUpdateTimeStamp
 * @property 'Healthy'|'Unhealthy'|'Provisioning'|null $RuleHealth
 * @property 'TRUSTED_ACCESS_NOT_ENABLED'|'DESTINATION_ACCOUNT_NOT_IN_ORGANIZATION'|'INTERNAL_SERVER_ERROR'|null $FailureReason
 * @property string|null $DestinationAccountId
 * @property string|null $DestinationRegion
 */
class CentralizationRuleSummary extends Shape
{
    /**
     * @param array{
     *     RuleName?: string|null,
     *     RuleArn?: string|null,
     *     CreatorAccountId?: string|null,
     *     CreatedTimeStamp?: int|null,
     *     CreatedRegion?: string|null,
     *     LastUpdateTimeStamp?: int|null,
     *     RuleHealth?: 'Healthy'|'Unhealthy'|'Provisioning'|null,
     *     FailureReason?: 'TRUSTED_ACCESS_NOT_ENABLED'|'DESTINATION_ACCOUNT_NOT_IN_ORGANIZATION'|'INTERNAL_SERVER_ERROR'|null,
     *     DestinationAccountId?: string|null,
     *     DestinationRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
