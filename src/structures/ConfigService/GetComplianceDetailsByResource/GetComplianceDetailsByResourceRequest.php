<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceDetailsByResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceType
 * @property string|null $ResourceId
 * @property list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'>|null $ComplianceTypes
 * @property string|null $NextToken
 * @property string|null $ResourceEvaluationId
 */
class GetComplianceDetailsByResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     ResourceId?: string|null,
     *     ComplianceTypes?: list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'>|null,
     *     NextToken?: string|null,
     *     ResourceEvaluationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
