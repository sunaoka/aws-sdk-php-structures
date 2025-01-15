<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateComplianceDetailsByConfigRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property string $ConfigRuleName
 * @property string $AccountId
 * @property string $AwsRegion
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'|null $ComplianceType
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class GetAggregateComplianceDetailsByConfigRuleRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     ConfigRuleName: string,
     *     AccountId: string,
     *     AwsRegion: string,
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'|null,
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
