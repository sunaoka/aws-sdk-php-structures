<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceDetailsByResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceType
 * @property string $ResourceId
 * @property list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'> $ComplianceTypes
 * @property string $NextToken
 * @property string $ResourceEvaluationId
 */
class GetComplianceDetailsByResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceType?: string,
     *     ResourceId?: string,
     *     ComplianceTypes?: list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'>,
     *     NextToken?: string,
     *     ResourceEvaluationId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
