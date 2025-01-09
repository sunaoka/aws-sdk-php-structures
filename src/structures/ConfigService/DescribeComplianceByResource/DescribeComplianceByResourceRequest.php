<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeComplianceByResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceType
 * @property string $ResourceId
 * @property list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'> $ComplianceTypes
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeComplianceByResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceType?: string,
     *     ResourceId?: string,
     *     ComplianceTypes?: list<'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'>,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
