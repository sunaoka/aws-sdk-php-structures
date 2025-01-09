<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppComponentRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy' $expectedComplianceStatus
 * @property string $expectedRpoDescription
 * @property int $expectedRpoInSecs
 * @property string $expectedRtoDescription
 * @property int $expectedRtoInSecs
 */
class RecommendationDisruptionCompliance extends Shape
{
    /**
     * @param array{
     *     expectedComplianceStatus: 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy',
     *     expectedRpoDescription?: string,
     *     expectedRpoInSecs?: int,
     *     expectedRtoDescription?: string,
     *     expectedRtoInSecs?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
