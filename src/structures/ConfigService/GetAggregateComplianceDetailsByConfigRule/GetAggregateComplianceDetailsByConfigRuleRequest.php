<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateComplianceDetailsByConfigRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property string $ConfigRuleName
 * @property string $AccountId
 * @property string $AwsRegion
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA' $ComplianceType
 * @property int $Limit
 * @property string $NextToken
 */
class GetAggregateComplianceDetailsByConfigRuleRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     ConfigRuleName: string,
     *     AccountId: string,
     *     AwsRegion: string,
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA',
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
