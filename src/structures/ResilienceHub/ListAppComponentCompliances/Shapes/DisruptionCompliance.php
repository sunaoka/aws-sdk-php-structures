<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppComponentCompliances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $achievableRpoInSecs
 * @property int<0, max> $achievableRtoInSecs
 * @property 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy' $complianceStatus
 * @property int<0, max> $currentRpoInSecs
 * @property int<0, max> $currentRtoInSecs
 * @property string $message
 * @property string $rpoDescription
 * @property string $rpoReferenceId
 * @property string $rtoDescription
 * @property string $rtoReferenceId
 */
class DisruptionCompliance extends Shape
{
    /**
     * @param array{
     *     achievableRpoInSecs?: int<0, max>,
     *     achievableRtoInSecs?: int<0, max>,
     *     complianceStatus: 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy',
     *     currentRpoInSecs?: int<0, max>,
     *     currentRtoInSecs?: int<0, max>,
     *     message?: string,
     *     rpoDescription?: string,
     *     rpoReferenceId?: string,
     *     rtoDescription?: string,
     *     rtoReferenceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
