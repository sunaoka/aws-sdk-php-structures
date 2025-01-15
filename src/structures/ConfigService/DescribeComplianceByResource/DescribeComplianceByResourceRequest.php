<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeComplianceByResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceType
 * @property string|null $ResourceId
 * @property list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'>|null $ComplianceTypes
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class DescribeComplianceByResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     ResourceId?: string|null,
     *     ComplianceTypes?: list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'>|null,
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
