<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeComplianceByConfigRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ConfigRuleNames
 * @property list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'>|null $ComplianceTypes
 * @property string|null $NextToken
 */
class DescribeComplianceByConfigRuleRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleNames?: list<string>|null,
     *     ComplianceTypes?: list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
