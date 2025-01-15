<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $achievableRpoInSecs
 * @property int<0, max>|null $achievableRtoInSecs
 * @property 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy' $complianceStatus
 * @property int<0, max>|null $currentRpoInSecs
 * @property int<0, max>|null $currentRtoInSecs
 * @property string|null $message
 * @property string|null $rpoDescription
 * @property string|null $rpoReferenceId
 * @property string|null $rtoDescription
 * @property string|null $rtoReferenceId
 */
class DisruptionCompliance extends Shape
{
    /**
     * @param array{
     *     achievableRpoInSecs?: int<0, max>|null,
     *     achievableRtoInSecs?: int<0, max>|null,
     *     complianceStatus: 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy',
     *     currentRpoInSecs?: int<0, max>|null,
     *     currentRtoInSecs?: int<0, max>|null,
     *     message?: string|null,
     *     rpoDescription?: string|null,
     *     rpoReferenceId?: string|null,
     *     rtoDescription?: string|null,
     *     rtoReferenceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
