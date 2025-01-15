<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutExternalEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComplianceResourceType
 * @property string $ComplianceResourceId
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA' $ComplianceType
 * @property string|null $Annotation
 * @property \Aws\Api\DateTimeResult $OrderingTimestamp
 */
class ExternalEvaluation extends Shape
{
    /**
     * @param array{
     *     ComplianceResourceType: string,
     *     ComplianceResourceId: string,
     *     ComplianceType: 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA',
     *     Annotation?: string|null,
     *     OrderingTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
