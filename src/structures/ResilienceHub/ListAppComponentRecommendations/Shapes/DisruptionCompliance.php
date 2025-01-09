<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppComponentRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $achievableRpoInSecs
 * @property int $achievableRtoInSecs
 * @property 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy' $complianceStatus
 * @property int $currentRpoInSecs
 * @property int $currentRtoInSecs
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
     *     achievableRpoInSecs?: int,
     *     achievableRtoInSecs?: int,
     *     complianceStatus: 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy',
     *     currentRpoInSecs?: int,
     *     currentRtoInSecs?: int,
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
