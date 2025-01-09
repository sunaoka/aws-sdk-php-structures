<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeComplianceByConfigRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ConfigRuleNames
 * @property list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'> $ComplianceTypes
 * @property string $NextToken
 */
class DescribeComplianceByConfigRuleRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleNames?: list<string>,
     *     ComplianceTypes?: list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
