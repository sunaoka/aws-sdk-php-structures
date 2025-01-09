<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceDetailsByConfigRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 * @property list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'> $ComplianceTypes
 * @property int<0, 100> $Limit
 * @property string $NextToken
 */
class GetComplianceDetailsByConfigRuleRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     ComplianceTypes?: list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'>,
     *     Limit?: int<0, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
