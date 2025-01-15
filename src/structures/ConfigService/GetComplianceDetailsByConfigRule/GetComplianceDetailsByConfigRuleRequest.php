<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceDetailsByConfigRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 * @property list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'>|null $ComplianceTypes
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class GetComplianceDetailsByConfigRuleRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     ComplianceTypes?: list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'>|null,
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
